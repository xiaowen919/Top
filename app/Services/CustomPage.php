<?php
/**
 * Created by PhpStorm.
 * User: SA
 * Date: 2019/4/2
 * Time: 15:23
 */

namespace App\Services;

class CustomPage
{
    private $pageNum;
    private $count;
    private $type;
    private $pageSize;
    private $currentPage;
    private $url;

    public function __construct($count, $pageSize = 10, $type = 2)
    {
        $this->count = $count;
        $this->type = $type;
        $this->pageSize = $pageSize;
        $this->pageNum = ceil($count / $pageSize);
        $this->url = $this->setUrl();
        $this->currentPage = $this->setPage();
    }

    public function getCount()
    {
        return $this->count;
    }

    private function setPage()
    {
        if (isset($_GET['p']) && !empty($_GET['p'])) {
            if (intval($_GET['p']) > 0) {
                if (intval($_GET['p']) > $this->pageNum) {
                    return $this->pageNum;
                } else {
                    return intval($_GET['p']);
                }
            } else {
                return 1;
            }
        } else {
            return 1;
        }
    }

    static public function getPage($pageNum, $pageName = 'p')
    {
        if (isset($_GET[$pageName]) && !empty($_GET[$pageName])) {
            if (intval($_GET[$pageName]) > 0) {
                if (intval($_GET[$pageName]) > $pageNum) {
                    return $pageNum;
                } else {
                    return intval($_GET[$pageName]);
                }
            } else {
                return 1;
            }
        } else {
            return 1;
        }
    }

    private function setUrl()
    {
        $url = '';
        $url = $_SERVER["REQUEST_URI"];
        $par = parse_url($url);
        if (isset($par['query']) && $par['query']) {
            parse_str($par['query'], $query);
            unset($query['p']);
            $url = $par['path'] . '?' . http_build_query($query);
        } else {
            $url = $par['path'] . '?';
        }
        return $url;
    }

    private function prev()
    {
        if ($this->currentPage == 1) {
            return 1;
        }
        return $this->currentPage - 1;
    }

    private function next()
    {
        if ($this->currentPage == $this->pageNum) {
            return $this->currentPage;
        }
        return $this->currentPage + 1;
    }

    public function getOffsets()
    {
        return ($this->currentPage - 1) * $this->pageSize;;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

    public function show()
    {
        $pageNews = '';
        if ($this->type == 2) {
            if ($this->pageNum > 1) {
                $pageNews .= '<ul class="pagination" style="float:right" >';
                if ($this->currentPage == 1) {
                    $pageNews .= '<li class="page-item disabled"><span class="page-link" href="javascript:void(0);"><</span></li>';
                } else {
                    $pageNews .= '<li class="page-item"><a class="page-link" href="' . $this->url . '&p=' . $this->prev() . '"><</a></li>';
                }
                if ($this->pageNum > 6) {
                    for ($i = 1; $i <= 3; $i++) {
                        $currentClass = 'class="page-item"';
                        if ($this->currentPage == $i) {
                            $currentClass = ' class="page-item active"';
                        }
                        $pageNews .= '<li ' . $currentClass . '><a class="page-link" href="' . $this->url . '&p=' . $i . '">' . $i . '</a></li>';
                    }
                    for ($i = $this->pageNum - 2; $i <= $this->pageNum; $i++) {
                        $currentClass = 'class="page-item"';
                        if ($this->currentPage == $i) {
                            $currentClass = 'class="page-item active"';
                        }
                        $pageNews .= '<li ' . $currentClass . '><a class="page-link" href="' . $this->url . '&p=' . $i . '">' . $i . '</a></li>';
                    }
                } else {
                    for ($i = 1; $i <= $this->pageNum; $i++) {
                        $currentClass = 'class="page-item"';
                        if ($this->currentPage == $i) {
                            $currentClass = 'class="page-item active"';
                        }
                        $pageNews .= '<li ' . $currentClass . '><a class="page-link" href="' . $this->url . '&p=' . $i . '">' . $i . '</a></li>';
                    }
                }
                if ($this->currentPage == $this->pageNum) {
                    $pageNews .= '<li class="page-item disabled"><span class="page-link"  href="javascript:void(0);">></span></li>';
                } else {
                    $pageNews .= '<li class="page-item"><a class="page-link"  href="' . $this->url . '&p=' . $this->next() . '">></a></li>';
                }
                $pageNews .= '</ul>';
            }
        } else {
            if ($this->pageNum > 1) {
                $pageNews .= '<ul class="pager">';
                if ($this->currentPage == 1) {
                    $pageNews .= '<li class="disabled"><a href="javascript:void(0);">上一页</a></li>';
                } else {
                    $pageNews .= '<li class="previous"><a href="' . $this->url . '&p=' . $this->prev() . '">上一页</a></li>';
                }
                if ($this->currentPage == $this->pageNum) {
                    $pageNews .= '<li class="disabled"><a href="javascript:void(0);">下一页</a></li>';
                } else {
                    $pageNews .= '<li class="next"><a href="' . $this->url . '&p=' . $this->next() . '">下一页</a></li>';
                }
                $pageNews .= '</ul>';
            }
        }
        return $pageNews;
    }
}