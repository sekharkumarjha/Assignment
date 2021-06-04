<?= $this->view('header')?>
<div class="banner">
    <div class= "article">
        <div class="ref">
        <a href="/Home">Home</a>/News and Events
        </div>
        <div class = "article-heading">
        <h1>News and Events</h1>
    </div>
        <div class="article-description">
        <p>Visit often and stay up to date on our news and events. This page will feature articles that focus on news, announcements, industry updates, and more.</p>
        </div>
    </div>
</div>
<?php foreach($data as $post){?>
<div class = "container">
<div class = "heading">
<p><?=$post->heading?></p>
</div>
<div class = "date">
<p><?=$post->created_at?></p>
</div>
</div>
<hr>
<?php }?>

<style>
    .container{
    padding-top:20px;    
    width: 100vw;
    display: flex;
    justify-content: space-between;
    }
    .heading{
        width: 90%;
        
    }
    .date{
        width: 10%;
    }
    .banner{
        padding: 10px;
        width: 100vw;
        height: 50vh;
        background: url('<?=ASSETS?>Images/Newsbackgroun.png');
        background-size: cover;
        
    }
    .article{
        position: relative;
        top:30px;
        left:30px;
        width: 45%;
        height: 90%;
        background-color:#ffffff;
        align-items: left;
        text-align: left;
        box-shadow: 2px 2px 4px #000000;
    }
    .article-heading{
        padding-top: 40px;
        padding-left: 30px;
    }
    .article-description{
        padding-top: 20px;
        padding-left:30px;
    }
    h1 {
    color: #022737;
    font-size: 42px;
    line-height: 1.14;
    margin: 0;
    }
    .ref{
        padding-top: 30px;
        padding-left:30px;
        padding-bottom: 20px;
    }
    .ref a{
        text-decoration: none;
        color:#022737;
    }
    </style>
<?= $this->view('footer')?> 