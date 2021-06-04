<?php $this->view('header')?>
<div class="banner">
    <div class= "article">
        <div class="ref">
        <a href="/Home">Home</a>/News and Events
        </div>
        <div class = "article-heading">
        <h1>Giving Matters</h1>
    </div>
        <div class="article-description">
        <p>Welcome to our blog. Visit often to read about the benefits of strategic philanthropy, improving the donor experience, donor-advised funds, tax-effective giving, philanthropy thought leadership, charitable giving and more.</p>
        </div>
    </div>
</div>
<div class="columns">
<?php foreach($data as $post){ ?>
<div class="container">
    <div class="image-container">
        <img src = "<?=ASSETS?>Images/<?=$post->Image?>">
    </div>
    <div class="data-container">
    <h3><?=$post->heading?></h3>
    <p><?=$post->created_at?></p>
    <p><?=$post->description?></p>
    </div>
    
</div>
<?php }?>
</div>

<style>
    .columns{
        margin:5rem auto;
        width: 90%;
        display: grid;
        grid-template-columns: 50% 50%;
        grid-gap:20px;
    }
    .image-container{
        padding:5px;
        height: 100%;
        float: left;
        width: 50%;
    }
    .data-container{
        padding:10px;
        height: 100%;
        float: right;
        width: 50%;
    }
    img{
        max-width: 100%;
        min-height: 100%;
        display: block;
    }
    .container{   
    width: 100%;
    height: 12em;
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
        height: 100%;
        background-color:#ffffff;
        align-items: left;
        text-align: left;
        overflow: hidden;
        box-shadow: 2px 2px 4px #000000;
    }
    .article-heading{
        padding-top: 40px;
        padding-left: 30px;
    }
    .article-description{
        padding-top: 20px;
        padding-left:30px;
        padding-bottom: 20px;
        overflow: hidden;
        text-overflow: ellipsis;
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
    @media(max-width:768px){
        .columns{
            grid-template-columns: none;
            grid-auto-flow: row;
        }
        .article{
            width: 80%;
        }
    }
    </style>

<?php $this->view('footer');?>