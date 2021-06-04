
<?php 
    //header of the page
    
    $this->view('header');
    
?>
<?php
//body of the page
    $this->view ('templates/banner');
    $this->view ('templates/about');
    $this->view ('templates/benifits',$data['benifits']);
    $this->view ('templates/services',$data['services']);
    $this->view('templates/updates',$data['updates']);
    $this->view ('templates/news',$data['news']);
   
?>
<?php
    //footer of the page
    $this->view('footer');
?>