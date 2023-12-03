<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;

class KdpController extends Controller
{

    public function downloadPDF()
    {
        $frontPageData = [
            'title'   => 'THE HOLLOW MANOR 2',
            'content' => '<img src="image/img1.jpg">',
            'author'  => 'BriBook  (Dev)',
        ];

        $contentPagesData = [];

        for ($i = 1; $i <= 10; $i++) {
            $contentPagesData[] = [
                'title' => "Chapter $i",
                'content' => "Lorem Ipsum
                Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...
                There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...

                freestar
                What is Lorem Ipsum?
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                Why do we use it?
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',
                making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text,
                and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years,
                sometimes by accident, sometimes on purpose (injected humour and the like).


                Where does it come from?
                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC,
                making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College, looked up one of the more obscure Latin words,
                consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
                discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of de Finibus Bonorum et Malorum (The Extremes of Good and Evil) by Cicero,
                written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet.., comes from a line in section 1.10.32.

                The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from de Finibus Bonorum et Malorum by Cicero are also reproduced in their exact original form,
                accompanied by English versions from the 1914 translation by H. Rackham.
                "
            ];
        }

        $backPageData = [
            'title'  => 'Back Page Title',
            'img'    => '<img src="image/back-cover.png">',
            'author' => 'BriBook (Dev)',
        ];

        $pdf = PDF::loadView('kdp.pdf', compact('frontPageData', 'contentPagesData', 'backPageData'));

        $pdf->setOption('page-size', 'A4', 'landscap');

        $filename = 'KDP_book_' . uniqid() . '.pdf';
        return $pdf->stream($filename);
        // return $pdf->download($filename);
    }

    /**
     * Function for preview the flipable book
     *
     * @return void
     */
    public function previewBook()
    {
        return view('kdp.preview-book');
    }

    /**
     * Function for stream the PDF
     *
     * @param Request $request
     * @return void
     */
    public function streamPDF(Request $request)
    {
        $flipbookContent = '<img src="image/9.jpg" style="width:100%;height:100%;position:fixed;top:0;left:0;> ';

        $pdf = PDF::loadHtml($flipbookContent);

        $pdf->setPaper('A4', 'landscape');

        return $pdf->stream('flipbook.pdf');
    }

    /**
     * Function for convert into pdf format
     *
     * @param Request $request
     * @return void
     */
    public function convertPDF(Request $request)
    {
        //TODO: static content here need to get dynamic
        $flipbookContents = '
                                <!DOCTYPE html>
                                <html lang="en">
                                    <head>
                                        <meta charset="UTF-8">
                                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                        <meta name="csrf-token" content="{{ csrf_token() }}">
                                        <title>NDP Printable Book</title>
                                        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
                                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
                                        <link rel="stylesheet" href="{{ asset("css/style.css") }}">
                                        <script src="{{ asset("js/main.js") }}" defer></script>
                                        <script src="https://kit.fontawesome.com/b0f29e9bfe.js" crossorigin="anonymous"></script>
                                        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                                    </head>

                                    <body>

                                        <!-- Previous Button -->
                                        <button id="prev-btn">
                                            <i class="fas fa-arrow-circle-left"></i>
                                        </button>

                                        <!-- Book -->
                                        <div id="book" class="book">
                                            <!-- Paper 1 -->
                                            <div id="p1" class="paper flipbook-page">
                                                <div class="front" style="background-image: url("image/9.jpg"); background-size: cover;">
                                                    <div id="f1" class="front-content">
                                                        <h1>The hollow manor 2</h1>
                                                    </div>
                                                </div>
                                                <div class="back">
                                                    <div id="b1" class="back-content">
                                                        <h1>Back page 1</h1>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Paper 2 -->
                                            <div id="p2" class="paper flipbook-page">
                                                <div class="front">
                                                    <div id="f2" class="front-content">
                                                        <h1>Front page 2</h1>
                                                    </div>
                                                </div>
                                                <div class="back">
                                                    <div id="b2" class="back-content">
                                                        <h1>Back page 2</h1>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Paper 3 -->
                                            <div id="p3" class="paper flipbook-page">
                                                <div class="front">
                                                    <div id="f3" class="front-content">
                                                        <h1>Front page 3</h1>
                                                    </div>
                                                </div>
                                                <div class="back">
                                                    <div id="b3" class="back-content">
                                                        <h1>Back page 3</h1>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Paper 4 -->
                                            <div id="p4" class="paper flipbook-page">
                                                <div class="front">
                                                    <div id="f4" class="front-content">
                                                        <h1>Front page 4</h1>
                                                    </div>
                                                </div>
                                                <div class="back">
                                                    <div id="b4" class="back-content">
                                                        <h1>Back page 4</h1>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="p5" class="paper flipbook-page">
                                                <div class="front">
                                                    <div id="5" class="front-content">
                                                        <h1>Front page 5</h1>
                                                    </div>
                                                </div>
                                                <div class="back">
                                                    <div id="b5" class="back-content">
                                                        <h1>Back page 5</h1>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="p6" class="paper flipbook-page">
                                                <div class="front">
                                                    <div id="f6" class="front-content">
                                                        <h1>Front page 6</h1>
                                                    </div>
                                                </div>
                                                <div class="back">
                                                    <div id="b6" class="back-content">
                                                        <h1>Back page 6</h1>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="p7" class="paper flipbook-page">
                                                <div class="front">
                                                    <div id="f7" class="front-content">
                                                        <h1>Front page 7</h1>
                                                    </div>
                                                </div>
                                                <div class="back">
                                                    <div id="b7" class="back-content">
                                                        <h1>Back page 7</h1>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="p8" class="paper flipbook-page">
                                                <div class="front">
                                                    <div id="f8" class="front-content">
                                                        <h1>Front page 8</h1>
                                                    </div>
                                                </div>
                                                <div class="back">
                                                    <div id="b8" class="back-content">
                                                        <h1>Back page 8</h1>
                                                    </div>
                                                </div>
                                            </div>


                                            <div id="p9" class="paper flipbook-page">
                                                <div class="front">
                                                    <div id="f9" class="front-content">
                                                        <h1>Front page 9</h1>
                                                    </div>
                                                </div>
                                                <div class="back">
                                                    <div id="b9" class="back-content">
                                                        <h1>Back page 9</h1>
                                                    </div>
                                                </div>
                                            </div>


                                            <div id="p10" class="paper flipbook-page">
                                                <div class="front">
                                                    <div id="f10" class="front-content">
                                                        <h1>Front page 10</h1>
                                                    </div>
                                                </div>
                                                <div class="back">
                                                    <div id="b10" class="back-content">
                                                        <h1>Back page 10</h1>
                                                    </div>
                                                </div>
                                            </div>


                                            <div id="p11" class="paper flipbook-page">
                                                <div class="front">
                                                    <div id="f11" class="front-content">
                                                        <h1>Front page 11</h1>
                                                    </div>
                                                </div>
                                                <div class="back">
                                                    <div id="b11" class="back-content">
                                                        <h1>Back page 11</h1>
                                                    </div>
                                                </div>
                                            </div>


                                            <div id="p12" class="paper flipbook-page">
                                                <div class="front">
                                                    <div id="f12" class="front-content">
                                                        <h1>Front page 12</h1>
                                                    </div>
                                                </div>
                                                <div class="back">
                                                    <div id="b12" class="back-content"
                                                        style="background-image: url("image/back-cover.png"); background-size: cover;">
                                                        {{-- <h1>Back page page Cover page</h1> --}}
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- Next Button -->
                                        <button id="next-btn">
                                            <i class="fas fa-arrow-circle-right"></i>
                                        </button>

                                        <button id="convertToPDF" class="btn btn-success generateNpd"> Convert PDF </button>
                                        {{-- <a href="{{ route("convert-pdf") }}"> <button id="convertToPDF" class="btn btn-success generateNpd"> Convert PDF </button></a> --}}

                                    </body>

                                </html>
                            ';

        // TODO: get dynamic content
        // $flipbookContents = $request->input('flipbookContents');
        $content = str_replace("'", '"', $flipbookContents);

        // Load HTML content into PDF
        $pdf = PDF::loadHtml($content);

        // Set paper size (optional)
        $pdf->setPaper('A4', 'landscape');

        $filename = 'publish_book_' . date('dmy_his') . '.pdf';

        // Save the PDF
        $pdf->save(storage_path('app/public/' . $filename));

        return response()->json(['success' => true, 'filename' => $filename, 'message' => 'PDF save successfully']);
    }

    /**
     * Function for capture book page
     *
     * @param Request $request
     * @return void
     */
    public function saveImage(Request $request)
    {
        $imageDataUrl = $request->input('imageDataUrl');

        // Decode the data URL and save the image to storage
        list($type, $imageData) = explode(';', $imageDataUrl);
        list(, $imageData) = explode(',', $imageData);
        $imageData = base64_decode($imageData);

        // Generate a unique filename (you may need to adjust this)
        $filename = 'flipbook_' . uniqid() . '.jpg';

        // Save the image to the storage disk (you may need to adjust the disk)
        Storage::disk('public')->put($filename, $imageData);

        return response()->json(['filename' => $filename]);
    }
}
