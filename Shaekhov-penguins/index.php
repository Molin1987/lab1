<?php       
include "connect.php"; 
 
 
$query_get_category = "select * from categories";  
 
$categories = mysqli_fetch_all(mysqli_query($con, $query_get_category)); 
 
$news = mysqli_query($con, "select * from news"); 
 
?>  

    <!DOCTYPE html> 
    <html lang="en"> 
    <head> 
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Пингвины</title>
        <link rel='stylesheet' type='text/css' media='screen' href='style.css'> 
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <style>
*{
    font-family: 'Lato', sans-serif;
    padding: 0px;
    margin: 0px;
}
.primary-nav{
    display: flex;
    justify-content: center;
}

.Sections{
    color: var(--Base-Grey-100, #262D33);
    font-family: 'Lato', sans-serif;
    font-size: 14px;
    font-style: normal;
    font-weight: 400;
    line-height: 20px;
}

.hr-nav{
    width: 1140px;
    height: 1px;
    background: var(--Base-Grey-15, #D9DADB);
    border: none;
    margin: auto;
}

.search{
    display: flex;
    gap: 10px;
    justify-content: flex-start;
    align-items: center;
}

.search svg{
    align-self: center;
}
.search input{
    height: 50px;
    width: 470px;
}
.search-bord{
    border: none;
}

.search input{
    height: 30px;
    width: 470px;
}

.text-search{
    border: none;
}

.text-search{
    font-family: 'Lato', sans-serif;
    color: var(--Base-Grey-50, #939699);
    font-size: 14px;
    font-style: normal;
    font-weight: 400;
    line-height: 20px;
}

.SignIn{
    color: var(--Base-Grey-85, #4B5157);
    font-family: 'Lato', sans-serif;
    font-size: 14px;
    font-style: normal;
    font-weight: 400;
    line-height: 20px;
}


.left-nav{
    display: flex;
    justify-content: center;
    gap: 15px;
    align-items: center;
}

.center-nav{
    display: flex;
    justify-content: center;
    gap: 200px;
    align-items: center;
}

.right-nav{
    display: flex;
    justify-content: center;
    gap: 10px;
    align-items: center;
}

.poisk{
    display: flex;
    justify-content: center;
    gap: 10px;
}

.slogan{
    display: flex;
    justify-content: center;
    align-items: center;
}

.zagalovok{
    display: flex;
    justify-content: center;
    gap: 22px;
    align-items: center;
    flex-direction: column;
    align-self: center;
}

.zag{
    display: flex;
    justify-content: center;
    gap: 175px;
    align-self: center;
    margin-bottom: 15px;
}
.Penguins{
    display: flex;
    justify-content: center;
    align-items: center;
}

.mon{
    display: flex;
    justify-content: center;
    gap: 65px;
    align-items: center;
}

.text-gradus{
    color: var(--Base-Grey-85, #4B5157);
    font-family: 'Lato', sans-serif;
    font-size: 14px;
    font-style: normal;
    font-weight: 400;
    line-height: 20px; 
}

.gradus{
    display: flex;
    justify-content: center;
    gap: 10px;
}

li {
    list-style-type: none;
}

a{
    text-decoration: none;
}
.text-nav{
    color: var(--Base-White, #FFF);
    font-family: 'Lato', sans-serif;
    font-size: 14px;
    font-style: normal;
    font-weight: 400;
    line-height: 20px;
    letter-spacing: 0.5px;
    text-transform: uppercase;
}

.navig{
    background: #262D33;
    color: white;
    height: 70px;
    display: flex;
    justify-content: center;
    flex-direction: column;

}
.list{
    list-style: none;
    display: flex;
    justify-content: center;
    gap: 31.5px;
}

.otstyp-verh-pod-nav{
    display: flex;
    justify-content: center;
    gap: 22px;
    align-items: center;
    flex-direction: column;
    align-self: center;
}

.forbs label{
    font-family: 'Roboto Slab', serif;
    size: 24px;
} 
.forbs input, textarea, select{
    border-radius: 5px;
    border: 1px solid var(--Base-Grey-15, #D9DADB);
    background: var(--Base-White, #FFF);
}
.forbs input[type=file]{
    border: none;
}
.forbs input[type=submit]{
    border-radius: 20px;
    background: var(--Blue-Blue-75, #072857);
    color: #FFF;
    width: 119px;
    height: 40px;
    flex-shrink: 0;
}

.n_nav li a {
    text-decoration: none;
    color: white;
    list-style: none;
}

.n_nav{
    display: flex;
    background-color: #262D33;
}

.containerd-flexflex-wrap{
    display: flex;
    justify-content: space-around;
}

.last-news img{ 
    padding: 20px; 
    width: 200px; 
    height: 150px; 
}

.card a{
    color: #262D33;
    text-decoration: none;
}
    </style>
    </head> 
    <body> 
        <div class="primary-nav">
        <div class="left-nav">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 18 14" fill="none">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M18 14H0V12H18V14ZM12 8H0V6H12V8ZM0 2V0H18V2H0Z" fill="#BCBFC2"/>
        </svg>
        <p class="Sections">Разделы</p>
    </div>
    <div class="center-nav">
        <svg xmlns="http://www.w3.org/2000/svg" width="1" height="50" viewBox="0 0 1 50" fill="none">
        <rect width="1" height="50" fill="#D9DADB"/>
        </svg>
        <div class="poisk">
            <div class="search">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.4354 17.3951L14.146 12.9395C15.2489 11.6301 15.8532 9.98262 15.8532 8.26749C15.8532 4.26026 12.5888 1 8.57659 1C4.56433 1 1.29999 4.26026 1.29999 8.26749C1.29999 12.2747 4.56433 15.535 8.57659 15.535C10.0828 15.535 11.5182 15.0812 12.7454 14.2199L17.0674 18.7093C17.2481 18.8967 17.4911 19 17.7514 19C17.9979 19 18.2317 18.9062 18.4092 18.7355C18.7863 18.3731 18.7983 17.7721 18.4354 17.3951ZM8.57659 2.89587C11.5423 2.89587 13.9549 5.30552 13.9549 8.26749C13.9549 11.2295 11.5423 13.6391 8.57659 13.6391C5.6109 13.6391 3.19823 11.2295 3.19823 8.26749C3.19823 5.30552 5.6109 2.89587 8.57659 2.89587Z" fill="#BCBFC2"/>
                </svg>
                <input type="search" placeholder="Поиск" class="search-bord">
            </div>
    </div>    
    </div>
    <div class="right-nav">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M18 16.6316C16.3675 18.2105 13.7008 19 10 19C6.29917 19 3.63251 18.2105 2 16.6316C2 13.3481 3.90591 10.9832 6.70588 10C7.60059 10.4169 8.59455 11 10 11C11.4054 11 12.3311 10.3926 13.2941 10C16.0575 10.9965 18 13.3748 18 16.6316ZM10 9C7.79086 9 6 7.20914 6 5C6 2.79086 7.79086 1 10 1C12.2091 1 14 2.79086 14 5C14 7.20914 12.2091 9 10 9Z" fill="#BCBFC2"/>
        </svg>
        <p class="SignIn">Войти</p>
    </div>    
    </div>
    <div class="otstyp-verh-pod-nav">
    <div class="zagalovok">
    <hr class="hr-nav">
        <div class="zag">
            <p class="slogan">Информация, которая не замерзнет!</p>
    <h1 class="Penguins">Пингвины</h1>
    <div class="mon">
    <p class="Monday-January-16-2024">Понедельник,  16 Января,  2024</p>
    <div class="gradus">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M10 16.4763C10.4151 16.4763 10.7494 16.8106 10.7494 17.2257V18.2506C10.7494 18.6657 10.4151 19 10 19C9.5849 19 9.25061 18.6657 9.25061 18.2506V17.2257C9.25061 16.8106 9.5849 16.4763 10 16.4763ZM10 3.52367C9.5849 3.52367 9.25061 3.18939 9.25061 2.77429V1.74939C9.25061 1.33429 9.5849 1 10 1C10.4151 1 10.7494 1.33429 10.7494 1.74939V2.77429C10.7494 3.18939 10.4151 3.52367 10 3.52367ZM18.2506 9.25061C18.6657 9.25061 19 9.5849 19 10C19 10.4151 18.6657 10.7494 18.2506 10.7494H17.2257C16.8106 10.7494 16.4763 10.4151 16.4763 10C16.4763 9.5849 16.8106 9.25061 17.2257 9.25061H18.2506ZM2.77429 9.25061C3.18939 9.25061 3.52367 9.5849 3.52367 10C3.52367 10.4151 3.18939 10.7494 2.77429 10.7494H1.74939C1.33429 10.7494 1 10.4151 1 10C1 9.5849 1.33429 9.25061 1.74939 9.25061H2.77429ZM15.6388 5.42286C15.3449 5.71306 14.871 5.71673 14.5771 5.42286C14.2833 5.12898 14.2833 4.6551 14.5771 4.36122L15.3008 3.63755C15.5947 3.34367 16.0686 3.34367 16.3624 3.63755C16.6563 3.93143 16.6563 4.40531 16.3624 4.69918L15.6388 5.42286ZM4.36122 14.5771C4.6551 14.2869 5.12898 14.2833 5.42286 14.5771C5.71673 14.871 5.71673 15.3449 5.42286 15.6388L4.69918 16.3624C4.40531 16.6563 3.93143 16.6563 3.63755 16.3624C3.34367 16.0686 3.34367 15.5947 3.63755 15.3008L4.36122 14.5771ZM15.6388 14.5771L16.3624 15.3008C16.6563 15.5947 16.6563 16.0686 16.3624 16.3624C16.0686 16.6563 15.5947 16.6563 15.3008 16.3624L14.5771 15.6388C14.2833 15.3449 14.2833 14.871 14.5771 14.5771C14.871 14.2833 15.3449 14.2833 15.6388 14.5771ZM4.36122 5.42286L3.63755 4.69918C3.34367 4.40531 3.34367 3.93143 3.63755 3.63755C3.93143 3.34367 4.40531 3.34367 4.69918 3.63755L5.42286 4.36122C5.71673 4.6551 5.71673 5.12898 5.42286 5.42286C5.12898 5.71673 4.6551 5.71673 4.36122 5.42286ZM10 4.36122C13.1078 4.36122 15.6388 6.89224 15.6388 10C15.6388 13.1114 13.1078 15.6388 10 15.6388C6.88857 15.6388 4.36122 13.1078 4.36122 10C4.36122 6.88857 6.89224 4.36122 10 4.36122ZM10 14.1363C12.2812 14.1363 14.1363 12.2812 14.1363 10C14.1363 7.71878 12.2812 5.86367 10 5.86367C7.71878 5.86367 5.86367 7.71878 5.86367 10C5.86367 12.2812 7.71878 14.1363 10 14.1363Z" fill="#BCBFC2"/>
    </svg>
    <p class="text-gradus">- 23 °C</p>
</div>
</div>
</div>
</div>
</div>

    <main> 
        <div class="text-main"> 
            <?php foreach ($categories as $category){ 
                echo "<li><a href='#'>$category[1]</a></li>"; 
                } 
            ?> 
        </div> 
    </main> 

    
<div class="main"> 
    <div class="last-news">
    <div class="containerd-flexflex-wrap">
        <?php 
            while($new = mysqli_fetch_assoc($news)){ 
                echo "<div class='card'>"; 
 
                $new_id = $new["news_id"]; 
                 
                echo "<img src='images/news/" . $new['image'] . "'>"; 
                echo "<h2 class = 'c_title'>" . $new['title'] . "</h2>"; 
                echo "<a href='oneNew.php?new=$new_id'>" . $new['news_id'] . "</a>"; 
                echo "</div>"; 
            } 
        ?>
        </div> 
    </div> 
</div>


    </body> 
</html> 