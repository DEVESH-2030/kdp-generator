<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ $frontPageData['title'] }}</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('image/img1.jpg') cover;
        }

        .front-title {
            width: 100%;
            height: 100%;
            position: fixed;
            top: -50;
            left: 0;
            font-size: 100px;
            font-family: 'Oswalf';
            position: absolute;
            text-align: center;
            color: white;
            background-size: cover;
        }

        .back-title {
            margin: 2%;
        }

        .front-author {
            color: rgb(252, 252, 252);
            font-family: sans-serif;
            position: absolute;
            bottom: 0px;
            right: 10px;
        }

        .content-page {
            page-break-before: always;
            margin: 30px;
            text-align: justify;
        }

        .back-cover {
            page-break-before: always;
            color: rgb(253, 253, 253);
            background-color: rgb(43, 102, 15);
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            background-size: cover;

        }

        .back-author {
            color: rgb(255, 255, 255);
            font-family: sans-serif;
            position: absolute;
            bottom: 0px;
            right: 10px;
        }

        .book {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: stretch;
        }

        @page {
            margin: 0;
            padding: 0;
            size: A4 landscape;
            background-color: rgb(35, 114, 48);
            background-image: url('image/img1.jpg') no-repeat center center fixed;
        }
    </style>
</head>

<body>
    <div class="book">
        <!-- Front Page -->
        <div class="page">
            <img src="image/9.jpg" alt="" style="width:100%;height:100%;position:fixed;top:0;left:0;">
            <p class="front-title">{{ $frontPageData['title'] }}</p>
            <p class="front-author">Written by: {{ $frontPageData['author'] }}</p>
        </div>

        <!-- Content Pages -->
        @foreach ($contentPagesData as $contentPage)
            <div class="content-page page">
                <h1>{{ $contentPage['title'] }}</h1>
                <hr>
                <p>{{ $contentPage['content'] }}
                    <img src="image/img6.jpg" alt=""
                        style="width:40%;height:40%;position:fixed;top:330;left:30;">
                    <img src="image/img2.jpg" alt=""
                        style="width:40%;height:40%;position:fixed;top:330;left:30; float: right;">
                </p>

            </div>
        @endforeach

        <!-- Back Page -->
        <div class="back-cover page" style="">
            <img src="image/656cf120a29fa.jpg" alt="" style="width:100%;height:100%;position:fixed;top:0;left:0;">

            {{-- <h1 class="back-title">{{ $backPageData['title'] }}</h1> --}}
            {{-- <p class="back-author">Written by: {{ $backPageData['author'] }}</p> --}}

            <div class="container" style="width:80%; margin-left:120px">
                <p style="margin-top: 18.15pt; margin-right: 97.75pt; line-height: 34.95pt">
                    <span
                        style="font-size: 30px; word-break: break-word;
                    text-transform: uppercase; font-family: Chalkboard SE,Arial,sans-serif;">Abount
                        My Family </span> <br>
                    <span style="font-family: Calibri; font-size: 12pt">Written by: Dev practice</span>
                </p>
                <hr>

                <p style=" margin-top: 20.65pt; margin-left: 144.25pt; text-align: justify; line-height: 17.05pt; ">
                    <img src="image/img7.jpg" alt=""
                        style="border-radius: 10px; width:200px; height: 200px; align-item: left; margin-left: -190px; margin-top:0px;">
                    {{-- <span style="font-family: Calibri; font-size: 14pt; letter-spacing: 0.15pt">image and content here</span> --}}
                </p>

                <p style=" margin-top: 10.9pt; margin-left: 19.65pt; text-align: justify;line-height: 19.5pt;">
                    <span style="font-family: Calibri; font-size: 16pt">Dev practice</span>
                </p>
                <hr>

                <p style="margin-top: 20.85pt; text-align: justify; line-height: 26.85pt">
                    <span style="font-family: Calibri; font-size: 22pt">Published BriBooks.</span>
                </p>

                <p style="margin-top: 12.9pt; text-indent: 1.1pt; line-height: 20.75pt">
                    BriBooks is the world’s leading children creative writing platform, enabling children to learn
                    creative writing and publish their books on global outlets such as Amazon. Powered by a
                    cutting-edge AI system, BriBooks combines the complete process of ideation, creativity, book
                    writing, publishing, and selling on one single platform. <br> © BriBooks
                </p>
                <hr>

                <p style="margin-top: 20.1pt; text-align: justify; line-height: 18.3pt">
                    <span style="font-family: Calibri; font-size: 15pt">BriBasks</span>
                </p>
                <p style="margin-top: 44.4pt; text-indent: 287.4pt; line-height: 10pt">
                    <span style="font-family: Calibri; font-size: 10pt">
                        9789394848 XXX Preview copy for limited distribution
                    </span>
                </p>
            </div>
        </div>
    </div>
</body>

</html>
