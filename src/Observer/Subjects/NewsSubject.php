<?php

namespace Src\Observer\Subjects;

use Src\Observer\SubjectDatas\NewsData;

class NewsSubject extends Subject
{
    public function __construct()
    {
        $this->data = new NewsData;
    }

    public function udateNews($title, $content)
    {
        $this->data->title = $title;
        $this->data->content = $content;

        $this->notifyObservers();
    }
}