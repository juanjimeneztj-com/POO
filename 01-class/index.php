<?php
    
    class Article{
        public $title = 'hola';
        public $date = '10/05/2019';
        public $description = 'nada';
        public $content = 'nada';
        public $author = 'yo';
        public $company = 'juanjimeneztj';
            
        public function getInfo($attr = 'all'){
            switch($attr){
                case 'title':
                    echo $this->title;
                    break;
                case 'date':
                    echo $this->date;
                    break;
                case 'description':
                    echo $this->description;
                    break;
                case 'content':
                    echo $this->content;
                    break;
                case 'author':
                    echo $this->author;
                    break;
                case 'company':
                    echo $this->company;
                    break;
                case 'all':
                    $arr = array ('title' => $this->title ,'date'=>$this->date,'description'=>$this->description,'content'=>$this->content,'author'=>$this->author,'company'=>$this->company);
                    echo json_encode($arr);
                    break;
            }
        }
    }

    $article = new Article;
    $article->getInfo();
?>