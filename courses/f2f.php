<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/mainlogo.webp">
    <title>SkillAssist - IT Training Institute</title>

    <!-- css file -->
    <link rel="stylesheet" href="../assets/style3.css">
</head>
<body>
    <a href="../courses.php"><button class="close">X</button></a>
    <h3 class="heading">F2F Round Preparation</h3>
    <div class="container">
        <div class="main-video">
            <div class="video">
                <video src="../video/f2f1.mp4" controls muted autoplay></video>
                <h3 class="title">01. What Exactly is F2F Round?</h3>
            </div>
        </div>

        <div class="video-list">
            <div class="vid active">
                <video src="../video/ai1.mp4" muted ></video>
                <h3 class="title">01. What Exactly is F2F Round?</h3>
            </div>
            <div class="vid">
                <video src="../video/ai1.mp4" muted ></video>
                <h3 class="title">02. Effective Communication</h3>
            </div>
            <div class="vid">
                <video src="../video/ai1.mp4" muted ></video>
                <h3 class="title">03. Confidence</h3>
            </div>
            <div class="vid">
                <video src="../video/ai1.mp4" muted ></video>
                <h3 class="title">04. Relevant Experience</h3>
            </div>
            <div class="vid">
                <video src="../video/ai1.mp4" muted ></video>
                <h3 class="title">05. Adaptibility/ai1</h3>
            </div>
            <div class="vid">
                <video src="../video/ai1.mp4" muted ></video>
                <h3 class="title">06. Teamwork Collaboration</h3>
            </div>
        </div>
    </div>
    <script>

        let listVideo = document.querySelectorAll('.video-list .vid');
        let mainVideo = document.querySelector('.main-video video');
        let title = document.querySelector('.main-video .title')

        listVideo.forEach(video =>{
            video.onclick = () => {
                listVideo.forEach(vid => vid.classList.remove('active'));
                video.classList.add('active');
                if(video.classList.contains('active')){
                    let src= video.children[0].getAttribute('src');
                    mainVideo.src = src;
                let text= video.children[1].innerHTML;
                title.innerHTML = text;
                };
            };
        });
    </script>
</body>
</html>