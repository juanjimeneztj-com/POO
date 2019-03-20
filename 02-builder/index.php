<?php
    
    class Article{
        public $title;
        public $date;
        public $description;
        public $content;
        public $author;
        public $company;
        
        public function __construct(){
            $this->title = 'title of the article';
            $this->date = date('Y');
            $this->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, neque sint arch...';
            $this->content = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, neque sint architecto possimus error iusto sapiente doloribus consequuntur molestiae ratione cumque porro et esse distinctio! Quaerat labore, nihil quibusdam possimus.';
            $this->author = 'Admin';
            $this->company = 'JUANJIMENEZTJ.COM';
        }
            
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