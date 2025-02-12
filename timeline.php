<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | Mysite</title>
    <link rel="stylesheet" type="text/css" href="css/timelineStyle.css">
</head>
<body style="font-family: tahoma; background-color: #d0d8e4;">
    <br/>
    <!-- Верхняя шапка-->
    <div class="blue_bar">
        <div style="width: 800px; margin:auto; font-size: 30px;">
            Mysite &nbsp &nbsp
            <input class="blue_bar__search_box" type="text" name="" placeholder="Search for people">
            <img src="https://media0.giphy.com/media/6Rp9ZYEy13cKhHZH5Z/giphy.webp?cid=ecf05e471rkgwzwslpkunsxjra3lpeardyup3vdi5h0pf2xo&ep=v1_gifs_search&rid=giphy.webp&ct=g" alt="" style="width: 63px; float: right; height:50px;">
        </div>
    </div>
    <!--Шапка профиля-->
    <div class="profileImage">

            <!--После обложки-->
        <div style="display: flex;">
                <!--блок друзей-->
            <div style="min-height: 400px; flex:1;">
                <div class="friendsPanel">
                    <img class="selfie" src="https://media0.giphy.com/media/6Rp9ZYEy13cKhHZH5Z/giphy.webp?cid=ecf05e471rkgwzwslpkunsxjra3lpeardyup3vdi5h0pf2xo&ep=v1_gifs_search&rid=giphy.webp&ct=g">
                    NOBODY
                </div>
            </div>
                <!--Блок постов-->
            <div style="min-height: 400px; flex:2.5; padding:20px; padding-right: 0px;">
                <div style="border:solid thin #aaa; padding: 10px; background-color: white">
                        <textarea name="" placeholder="Whats on your mind?" ></textarea>
                        <input class="post_button" type="submit" value="Post" ><br/>
                        <br>
                </div>
                <!--опупбликованные посты-->
                <div class="post_bar">
                    <!--Пост №1-->
                    <div class="post">
                        <div>
                            <img src="image/87a880cbdcd5603b9125ac2dcddc8722.jpg" alt="" style="width: 75px; margin-right:4px;">
                        </div>
                        <div>
                            <div style="font-weight: bold; color: #405d9b;">ANONIM</div>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam at voluptatem adipisci, animi odit facilis obcaecati quibusdam quas quasi veritatis ab expedita nulla magni, est sit et? Ab, pariatur nihil.
                            <br><br>
                            <a href="">Like</a> . <a href="">Comment</a> . <span style="color:#999">April 23 2020</span>
                        </div>
                    </div>
                    <!--Пост №2-->
                    <div class="post">
                        <div>
                            <img src="image/Elon-Musk-Vivatech-Business-1499013102.jpg" alt="" style="width: 75px; margin-right:4px;">
                        </div>
                        <div>
                            <div style="font-weight: bold; color: #405d9b;">SpaceX</div>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam at voluptatem adipisci, animi odit facilis obcaecati quibusdam quas quasi veritatis ab expedita nulla magni, est sit et? Ab, pariatur nihil.
                            <br><br>
                            <a href="">Like</a> . <a href="">Comment</a> . <span style="color:#999">April 23 2019</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</body>
</html>