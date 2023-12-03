<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>NDP Printable Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> --}}

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}" defer></script>


    <script src="https://kit.fontawesome.com/b0f29e9bfe.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</head>

<body>

    <!-- Previous Button -->
    <button id="prev-btn">
        <i class="fas fa-arrow-circle-left"></i>
    </button>

    <?php

    $contents = '  Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...
                There is no one who loves pain itself, who seeks after it and wants to have it, simply because
                it is pain...
                freestar
                What is Lorem Ipsum?
                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                classical Latin literature from 45 BC,
                making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College ,
                looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and
                going
                through the cites of the word in classical literature, discovered the undoubtable source.
                Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of de Finibus Bonorum et Malorum (The
                Extremes of Good and Evil) by Cicero,
                written in 45 BC. This book is a treatise on the theory of ethics, very popular during the
                Renaissance. The first line of Lorem
                Ipsum, Lorem ipsum dolor sit amet.., comes from a line in section 1.10.32. ';
    ?>
    <!-- Book -->
    <div id="book" class="book">
        <!-- Paper 1 -->
        <div id="p1" class="paper flipbook-page">
            <div class="front" style="background-image: url('image/9.jpg'); background-size: cover;">
                <div id="f1" class="front-content">
                    <h1>The hollow manor 2</h1>
                    <span class="footer-front">Writen By: Dev</span>
                </div>
            </div>
            <div class="back">
                <div id="b1" class="back-content">
                    <p class="heading">Chapter 1</p>
                    <p>{{ $contents }} </p>
                    <span class="footer">1</span>
                </div>
            </div>
        </div>
        <!-- Paper 2 -->
        <div id="p2" class="paper flipbook-page">
            <div class="front">
                <div id="f2" class="front-content">
                    <p class="heading">Chapter 2</p>
                    <p> {{ $contents }} </p>
                    <span class="footer">2</span>
                </div>
            </div>
            <div class="back">
                <div id="b2" class="back-content">
                    <p class="heading">Chapter 3</p>
                    <p> {{ $contents }} </p>
                    <span class="footer">3</span>
                </div>
            </div>
        </div>
        <!-- Paper 3 -->
        <div id="p3" class="paper flipbook-page">
            <div class="front">
                <div id="f3" class="front-content">
                    <p class="heading">Chapter 4</p>
                    <p> {{ $contents }} </p>
                    <span class="footer">4</span>
                </div>
            </div>
            <div class="back">
                <div id="b3" class="back-content">
                    <p class="heading">Chapter 5</p>
                    <p> {{ $contents }} </p>
                    <span class="footer">5</span>
                </div>
            </div>
        </div>

        <!-- Paper 4 -->
        <div id="p4" class="paper flipbook-page">
            <div class="front">
                <div id="f4" class="front-content">
                    <p class="heading">Chapter 6</p>
                    <p> {{ $contents }} </p>
                    <span class="footer">6</span>
                </div>
            </div>
            <div class="back">
                <div id="b4" class="back-content">
                    <p class="heading">Chapter 7</p>
                    <p> {{ $contents }} </p>
                    <span class="footer">7</span>
                </div>
            </div>
        </div>

        <div id="p5" class="paper flipbook-page">
            <div class="front">
                <div id="5" class="front-content">
                    <p class="heading">Chapter 8</p>
                    <p> {{ $contents }} </p>
                    <span class="footer">8</span>
                </div>
            </div>
            <div class="back">
                <div id="b5" class="back-content">
                    <p class="heading">Chapter 9</p>
                    <p> {{ $contents }} </p>
                    <span class="footer">9</span>
                </div>
            </div>
        </div>

        <div id="p6" class="paper flipbook-page">
            <div class="front">
                <div id="f6" class="front-content">
                    <p class="heading">Chapter 10</p>
                    <p> {{ $contents }} </p>
                    <span class="footer">10</span>
                </div>
            </div>
            <div class="back">
                <div id="b6" class="back-content">
                    <p class="heading">Chapter 11</p>
                    <p> {{ $contents }} </p>
                    <span class="footer">11</span>
                </div>
            </div>
        </div>

        <div id="p7" class="paper flipbook-page">
            <div class="front">
                <div id="f7" class="front-content">
                    <p class="heading">Chapter 12</p>
                    <p> {{ $contents }} </p>
                    <span class="footer">12</span>
                </div>
            </div>
            <div class="back">
                <div id="b7" class="back-content">
                    <p class="heading">Chapter 13</p>
                    <p> {{ $contents }} </p>
                    <span class="footer">13</span>
                </div>
            </div>
        </div>

        <div id="p8" class="paper flipbook-page">
            <div class="front">
                <div id="f8" class="front-content">
                    <p class="heading">Chapter 14</p>
                    <p> {{ $contents }} </p>
                    <span class="footer">14</span>
                </div>
            </div>
            <div class="back">
                <div id="b8" class="back-content">
                    <p class="heading">Chapter 15</p>
                    <p> {{ $contents }} </p>
                    <span class="footer">15</span>
                </div>
            </div>
        </div>


        <div id="p9" class="paper flipbook-page">
            <div class="front">
                <div id="f9" class="front-content">
                    <p class="heading">Chapter 16</p>
                    <p> {{ $contents }} </p>
                    <span class="footer">16</span>
                </div>
            </div>
            <div class="back">
                <div id="b9" class="back-content">
                    <p class="heading">Chapter 17</p>
                    <p> {{ $contents }} </p>
                    <span class="footer">17</span>
                </div>
            </div>
        </div>


        <div id="p10" class="paper flipbook-page">
            <div class="front">
                <div id="f10" class="front-content">
                    <p class="heading">Chapter 18</p>
                    <p> {{ $contents }} </p>
                    <span class="footer">18</span>
                </div>
            </div>
            <div class="back">
                <div id="b10" class="back-content">
                    <p class="heading">Chapter 19</p>
                    <p> {{ $contents }} </p>
                    <span class="footer">19</span>
                </div>
            </div>
        </div>


        <div id="p11" class="paper flipbook-page">
            <div class="front">
                <div id="f11" class="front-content">
                    <p class="heading">Chapter 20</p>
                    <p> {{ $contents }} </p>
                    <span class="footer">20</span>
                </div>
            </div>
            <div class="back">
                <div id="b11" class="back-content">
                    <p class="heading">Chapter 21</p>
                    <p> {{ $contents }} </p>
                    <span class="footer">21</span>
                </div>
            </div>
        </div>


        <div id="p12" class="paper flipbook-page">
            <div class="front">
                <div id="f12" class="front-content">
                    <p class="heading">Chapter 22</p>
                    <p> {{ $contents }} </p>
                    <span class="footer">22</span>
                </div>
            </div>
            <div class="back">
                <div id="b12" class="back-content"
                    style="background-image: url('image/back-cover-1.png'); background-size: cover;">
                </div>
            </div>
        </div>

    </div>
    <!-- Next Button -->
    <button id="next-btn">
        <i class="fas fa-arrow-circle-right"></i>
    </button>

    <button id="convertToPDF" class="btn btn-success generateNpd"> Convert PDF </button>
  <a href="{{ url('/') }}"><button id="go-back" class="btn btn-danger generateNpd"> Cancel </button></a>
    {{-- <button id="capture-btn" class="btn btn-success generateNpd">Capture Book</button> --}}

    <script>
        $(document).ready(function() {
            let flipbookContent = '';

            $('#convertToPDF').on('click', function() {
                $('.flipbook-page').each(function() {
                    flipbookContent += $(this).html();
                });

                console.log(flipbookContent);

                // Get the CSRF token
                let csrfToken = $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                    url: '/convert-pdf',
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    data: {
                        flipbookContent: flipbookContent
                    },
                    success: function(response) {
                        console.log(response);
                        alert('PDF conversion successful.');
                    },
                    error: function(error) {
                        console.error(error);
                        alert('Something wrong!');
                    }
                });
            });
        });
    </script>
</body>

</html>
