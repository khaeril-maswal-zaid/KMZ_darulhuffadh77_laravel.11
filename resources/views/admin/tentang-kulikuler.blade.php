@extends('layout.admin-template')

@section('content')
    <main class="ms-sm-auto p-md-4 pb-md-0">
        <div class="container-fluid px-0 rounded">
            <div
                class="d-flex bg-light justify-content-between flex-wrap flex-md-nowrap align-items-center px-3 pt-3 pb-2 mb-3">
                <h1 class="h4 id-table">Programs Hard & Soft Skill Students </h1>

                <!-- Button trigger modal -->
                <a href="{{ route('index.hardsoftskill') }}" class="btn btn-sm btn-primary">
                    Kembali
                </a>
            </div>

            @session('success')
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endsession

            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul class="mb-0">
                        <li>Failed to Post Article, An Error Occurred!</li>
                        @foreach ($errors->get('categoryid') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form action="{{ route('blogger.update', $blog->slug) }}" id="formUpdate" method="post"
                enctype="multipart/form-data">
                @csrf
                @method('put')

                <input type="hidden" name="categoryid" value="{{ $blog->category_id }}">
                <input type="hidden" name="bodyartikelUpdate1" id="isinaArtikelUpdate1" value="Darul Huffadh 77 -bug">
                <input type="hidden" name="bodyartikelUpdate2" id="isinaArtikelUpdate2" value="Darul Huffadh 77 -bug">
                <input type="hidden" name="olehUpdate" id="isinaArtikel2" value="Formalitas">
                <input type="hidden" name="olehlainnyaUpdate" id="isinaArtikel2" value="Formalitas">


                <div class="row">
                    <div class="col-md-8">
                        <div class="form-floating mb-2">
                            <input name="judulUpdate" type="text"
                                class="form-control @error('judulUpdate') is-invalid @enderror" id="judulberitaUpdate"
                                placeholder="Judul Berita" value="{{ old('judulUpdate') ?? $blog->title }}">
                            <label for="judulberitaUpdate">Program Name</label>
                            @error('judulUpdate')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating mb-2">
                            <input name="deskripsiUpdate" type="text"
                                class="form-control @error('deskripsiUpdate') is-invalid @enderror"
                                id="floatingTextareaUpdate" placeholder="Judul Berita"
                                value="{{ old('deskripsiUpdate') ?? $blog->excerpt }}">
                            <label for="floatingTextareaUpdate">Program Full Name</label>
                            @error('deskripsiUpdate')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <div id="editorUpdate1" class="@error('editorUpdate1') is-invalid @enderror">
                                {!! old('bodyartikelUpdate1') ?? $blog->body1 !!}</div>
                            @error('editorUpdate1')
                                <div class="invalid-feedback mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <div id="editorUpdate2" class="@error('editorUpdate2') is-invalid @enderror">
                                {!! old('bodyartikelUpdate2') ?? $blog->body2 !!}</div>
                            @error('editorUpdate2')
                                <div class="invalid-feedback mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-2">
                            <div class="form-floating mb-2">
                                <input name="imageUpdate1" type="file"
                                    class="form-control @error('imageUpdate1') is-invalid @enderror" id="sampul1Update"
                                    onchange="imgPreviewUpdate1()">
                                <label for="sampul1Update">Main image</label>
                                @error('imageUpdate1')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="W-100">
                                <img src="{{ asset('storage/' . $blog->picture1) }}"
                                    class="img-thumbnail img-fluid w-100 img-preview1Update" alt="default">
                            </div>
                        </div>

                        <div class="mb-2">
                            <div class="form-floating">
                                <input name="imageUpdate2" type="file"
                                    class="form-control @error('imageUpdate2') is-invalid @enderror" id="sampulUpdate2"
                                    onchange="imgPreviewUpdate2()">
                                <label for="samoul2">Additional 1 image</label>
                                @error('imageUpdate2')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="W-100">
                                <img src="{{ asset('storage/' . $blog->picture2) }}"
                                    class="img-thumbnail img-fluid w-100 img-previewUpdate2" alt="default">
                            </div>
                        </div>

                        <div class="mb-2">
                            <div class="form-floating mb-2">
                                <input name="imageUpdate3" type="file"
                                    class="form-control @error('imageUpdate3') is-invalid @enderror" id="sampulUpdate3"
                                    onchange="imgPreviewUpdate3()">
                                <label for="sampulUpdate3">Additional 2 image</label>
                                @error('imageUpdate3')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="W-100 ">
                                <img src="{{ asset('storage/' . $blog->picture3) }}"
                                    class="img-thumbnail img-fluid w-100 img-previewUpdate3" alt="default">
                            </div>
                        </div>

                        <div class="d-grid">
                            <button class="btn btn-primary" type="submit">Kirim</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="ckeditor-script">
            <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/super-build/ckeditor.js"></script>

            <script>
                let editorInstance1;
                let editorInstance2;

                // This sample still does not showcase all CKEditor&nbsp;5 features (!)
                // Visit https://ckeditor.com/docs/ckeditor5/latest/features/index.html to browse all the features.
                CKEDITOR.ClassicEditor.create(document.getElementById("editorUpdate1"), {
                        // https://ckeditor.com/docs/ckeditor5/latest/features/toolbar/toolbar.html#extended-toolbar-configuration-format
                        toolbar: {
                            items: [
                                'exportPDF', 'exportWord', '|',
                                'findAndReplace', 'selectAll', '|',
                                'heading', '|',
                                'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript',
                                'removeFormat', '|',
                                'bulletedList', 'numberedList', 'todoList', '|',
                                'outdent', 'indent', '|',
                                'undo', 'redo', '|',

                                'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                                'alignment', '|',
                                'link', 'uploadImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed',
                                '|',
                                'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                                // 'textPartLanguage', '|', by-KMZ
                                'sourceEditing'
                            ],
                            shouldNotGroupWhenFull: true
                        },
                        // Changing the language of the interface requires loading the language file using the <script> tag.
                        // language: 'es',
                        list: {
                            properties: {
                                styles: true,
                                startIndex: true,
                                reversed: true
                            }
                        },
                        // https://ckeditor.com/docs/ckeditor5/latest/features/headings.html#configuration
                        heading: {
                            options: [{
                                    model: 'paragraph',
                                    title: 'Paragraph',
                                    class: 'ck-heading_paragraph'
                                },
                                {
                                    model: 'heading1',
                                    view: 'h1',
                                    title: 'Heading 1',
                                    class: 'ck-heading_heading1'
                                },
                                {
                                    model: 'heading2',
                                    view: 'h2',
                                    title: 'Heading 2',
                                    class: 'ck-heading_heading2'
                                },
                                {
                                    model: 'heading3',
                                    view: 'h3',
                                    title: 'Heading 3',
                                    class: 'ck-heading_heading3'
                                },
                                {
                                    model: 'heading4',
                                    view: 'h4',
                                    title: 'Heading 4',
                                    class: 'ck-heading_heading4'
                                },
                                {
                                    model: 'heading5',
                                    view: 'h5',
                                    title: 'Heading 5',
                                    class: 'ck-heading_heading5'
                                },
                                {
                                    model: 'heading6',
                                    view: 'h6',
                                    title: 'Heading 6',
                                    class: 'ck-heading_heading6'
                                }
                            ]
                        },
                        // https://ckeditor.com/docs/ckeditor5/latest/features/editor-placeholder.html#using-the-editor-configuration
                        placeholder: 'Artikel Bagian 1',
                        // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-family-feature
                        fontFamily: {
                            options: [
                                'default',
                                'Arial, Helvetica, sans-serif',
                                'Courier New, Courier, monospace',
                                'Georgia, serif',
                                'Lucida Sans Unicode, Lucida Grande, sans-serif',
                                'Tahoma, Geneva, sans-serif',
                                'Times New Roman, Times, serif',
                                'Trebuchet MS, Helvetica, sans-serif',
                                'Verdana, Geneva, sans-serif'
                            ],
                            supportAllValues: true
                        },
                        // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-size-feature
                        fontSize: {
                            options: [10, 12, 14, 'default', 18, 20, 22],
                            supportAllValues: true
                        },
                        // Be careful with the setting below. It instructs CKEditor to accept ALL HTML markup.
                        // https://ckeditor.com/docs/ckeditor5/latest/features/general-html-support.html#enabling-all-html-features
                        htmlSupport: {
                            allow: [{
                                name: /.*/,
                                attributes: true,
                                classes: true,
                                styles: true
                            }]
                        },
                        // Be careful with enabling previews
                        // https://ckeditor.com/docs/ckeditor5/latest/features/html-embed.html#content-previews
                        htmlEmbed: {
                            showPreviews: true
                        },
                        // https://ckeditor.com/docs/ckeditor5/latest/features/link.html#custom-link-attributes-decorators
                        link: {
                            decorators: {
                                addTargetToExternalLinks: true,
                                defaultProtocol: 'https://',
                                toggleDownloadable: {
                                    mode: 'manual',
                                    label: 'Downloadable',
                                    attributes: {
                                        download: 'file'
                                    }
                                }
                            }
                        },
                        // https://ckeditor.com/docs/ckeditor5/latest/features/mentions.html#configuration
                        mention: {
                            feeds: [{
                                marker: '@',
                                feed: [
                                    '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes',
                                    '@chocolate', '@cookie', '@cotton', '@cream',
                                    '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread',
                                    '@gummi', '@ice', '@jelly-o',
                                    '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding',
                                    '@sesame', '@snaps', '@soufflé',
                                    '@sugar', '@sweet', '@topping', '@wafer'
                                ],
                                minimumCharacters: 1
                            }]
                        },
                        // The "superbuild" contains more premium features that require additional configuration, disable them below.
                        // Do not turn them on unless you read the documentation and know how to configure them and setup the editor.
                        removePlugins: [
                            // These two are commercial, but you can try them out without registering to a trial.
                            // 'ExportPdf',
                            // 'ExportWord',
                            'AIAssistant',
                            'CKBox',
                            'CKFinder',
                            'EasyImage',
                            // This sample uses the Base64UploadAdapter to handle image uploads as it requires no configuration.
                            // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/base64-upload-adapter.html
                            // Storing images as Base64 is usually a very bad idea.
                            // Replace it on production website with other solutions:
                            // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/image-upload.html
                            // 'Base64UploadAdapter',
                            'MultiLevelList',
                            'RealTimeCollaborativeComments',
                            'RealTimeCollaborativeTrackChanges',
                            'RealTimeCollaborativeRevisionHistory',
                            'PresenceList',
                            'Comments',
                            'TrackChanges',
                            'TrackChangesData',
                            'RevisionHistory',
                            'Pagination',
                            'WProofreader',
                            // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
                            // from a local file system (file://) - load this site via HTTP server if you enable MathType.
                            'MathType',
                            // The following features are part of the Productivity Pack and require additional license.
                            'SlashCommand',
                            'Template',
                            'DocumentOutline',
                            'FormatPainter',
                            'TableOfContents',
                            'PasteFromOfficeEnhanced',
                            'CaseChange'
                        ]
                    })
                    .then(editor => {
                        const valTupoksi = document.getElementById('isinaArtikelUpdate1');
                        valTupoksi.value = editor.getData();

                        editor.model.document.on('change:data', () => {
                            valTupoksi.value = editor.getData();
                        });

                        editorInstance1 = editor;
                    });


                CKEDITOR.ClassicEditor.create(document.getElementById("editorUpdate2"), {
                        // https://ckeditor.com/docs/ckeditor5/latest/features/toolbar/toolbar.html#extended-toolbar-configuration-format
                        toolbar: {
                            items: [
                                'exportPDF', 'exportWord', '|',
                                'findAndReplace', 'selectAll', '|',
                                'heading', '|',
                                'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript',
                                'removeFormat', '|',
                                'bulletedList', 'numberedList', 'todoList', '|',
                                'outdent', 'indent', '|',
                                'undo', 'redo', '|',

                                'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                                'alignment', '|',
                                'link', 'uploadImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed',
                                '|',
                                'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                                // 'textPartLanguage', '|', by-KMZ
                                'sourceEditing'
                            ],
                            shouldNotGroupWhenFull: true
                        },
                        // Changing the language of the interface requires loading the language file using the <script> tag.
                        // language: 'es',
                        list: {
                            properties: {
                                styles: true,
                                startIndex: true,
                                reversed: true
                            }
                        },
                        // https://ckeditor.com/docs/ckeditor5/latest/features/headings.html#configuration
                        heading: {
                            options: [{
                                    model: 'paragraph',
                                    title: 'Paragraph',
                                    class: 'ck-heading_paragraph'
                                },
                                {
                                    model: 'heading1',
                                    view: 'h1',
                                    title: 'Heading 1',
                                    class: 'ck-heading_heading1'
                                },
                                {
                                    model: 'heading2',
                                    view: 'h2',
                                    title: 'Heading 2',
                                    class: 'ck-heading_heading2'
                                },
                                {
                                    model: 'heading3',
                                    view: 'h3',
                                    title: 'Heading 3',
                                    class: 'ck-heading_heading3'
                                },
                                {
                                    model: 'heading4',
                                    view: 'h4',
                                    title: 'Heading 4',
                                    class: 'ck-heading_heading4'
                                },
                                {
                                    model: 'heading5',
                                    view: 'h5',
                                    title: 'Heading 5',
                                    class: 'ck-heading_heading5'
                                },
                                {
                                    model: 'heading6',
                                    view: 'h6',
                                    title: 'Heading 6',
                                    class: 'ck-heading_heading6'
                                }
                            ]
                        },
                        // https://ckeditor.com/docs/ckeditor5/latest/features/editor-placeholder.html#using-the-editor-configuration
                        placeholder: 'Artikel Bagian 2',
                        // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-family-feature
                        fontFamily: {
                            options: [
                                'default',
                                'Arial, Helvetica, sans-serif',
                                'Courier New, Courier, monospace',
                                'Georgia, serif',
                                'Lucida Sans Unicode, Lucida Grande, sans-serif',
                                'Tahoma, Geneva, sans-serif',
                                'Times New Roman, Times, serif',
                                'Trebuchet MS, Helvetica, sans-serif',
                                'Verdana, Geneva, sans-serif'
                            ],
                            supportAllValues: true
                        },
                        // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-size-feature
                        fontSize: {
                            options: [10, 12, 14, 'default', 18, 20, 22],
                            supportAllValues: true
                        },
                        // Be careful with the setting below. It instructs CKEditor to accept ALL HTML markup.
                        // https://ckeditor.com/docs/ckeditor5/latest/features/general-html-support.html#enabling-all-html-features
                        htmlSupport: {
                            allow: [{
                                name: /.*/,
                                attributes: true,
                                classes: true,
                                styles: true
                            }]
                        },
                        // Be careful with enabling previews
                        // https://ckeditor.com/docs/ckeditor5/latest/features/html-embed.html#content-previews
                        htmlEmbed: {
                            showPreviews: true
                        },
                        // https://ckeditor.com/docs/ckeditor5/latest/features/link.html#custom-link-attributes-decorators
                        link: {
                            decorators: {
                                addTargetToExternalLinks: true,
                                defaultProtocol: 'https://',
                                toggleDownloadable: {
                                    mode: 'manual',
                                    label: 'Downloadable',
                                    attributes: {
                                        download: 'file'
                                    }
                                }
                            }
                        },
                        // https://ckeditor.com/docs/ckeditor5/latest/features/mentions.html#configuration
                        mention: {
                            feeds: [{
                                marker: '@',
                                feed: [
                                    '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes',
                                    '@chocolate', '@cookie', '@cotton', '@cream',
                                    '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread',
                                    '@gummi', '@ice', '@jelly-o',
                                    '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding',
                                    '@sesame', '@snaps', '@soufflé',
                                    '@sugar', '@sweet', '@topping', '@wafer'
                                ],
                                minimumCharacters: 1
                            }]
                        },
                        // The "superbuild" contains more premium features that require additional configuration, disable them below.
                        // Do not turn them on unless you read the documentation and know how to configure them and setup the editor.
                        removePlugins: [
                            // These two are commercial, but you can try them out without registering to a trial.
                            // 'ExportPdf',
                            // 'ExportWord',
                            'AIAssistant',
                            'CKBox',
                            'CKFinder',
                            'EasyImage',
                            // This sample uses the Base64UploadAdapter to handle image uploads as it requires no configuration.
                            // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/base64-upload-adapter.html
                            // Storing images as Base64 is usually a very bad idea.
                            // Replace it on production website with other solutions:
                            // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/image-upload.html
                            // 'Base64UploadAdapter',
                            'MultiLevelList',
                            'RealTimeCollaborativeComments',
                            'RealTimeCollaborativeTrackChanges',
                            'RealTimeCollaborativeRevisionHistory',
                            'PresenceList',
                            'Comments',
                            'TrackChanges',
                            'TrackChangesData',
                            'RevisionHistory',
                            'Pagination',
                            'WProofreader',
                            // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
                            // from a local file system (file://) - load this site via HTTP server if you enable MathType.
                            'MathType',
                            // The following features are part of the Productivity Pack and require additional license.
                            'SlashCommand',
                            'Template',
                            'DocumentOutline',
                            'FormatPainter',
                            'TableOfContents',
                            'PasteFromOfficeEnhanced',
                            'CaseChange'
                        ]
                    })
                    .then(editor => {
                        const valTupoksi = document.getElementById('isinaArtikelUpdate2');
                        valTupoksi.value = editor.getData();

                        editor.model.document.on('change:data', () => {
                            valTupoksi.value = editor.getData();
                        });

                        editorInstance2 = editor;
                    });

                function updateArticle1(body1) {
                    // Pastikan editor sudah terinisialisasi sebelum mengatur datanya
                    if (editorInstance1) {
                        editorInstance1.setData(body1);
                    }
                }

                function updateArticle2(body1) {
                    // Pastikan editor sudah terinisialisasi sebelum mengatur datanya
                    if (editorInstance2) {
                        editorInstance2.setData(body1);
                    }
                }
            </script>
        </div>

        <script>
            function imgPreviewUpdate1() {
                const sampul = document.querySelector('#sampul1Update');
                const imgPreview = document.querySelector('.img-preview1Update');

                const file = sampul.files[0];

                // Cek apakah file ada dan apakah tipe file adalah gambar
                if (file && file.type.startsWith('image/')) {
                    const fileReader = new FileReader();
                    fileReader.readAsDataURL(file);

                    fileReader.onload = function(e) {
                        imgPreview.src = e.target.result;
                    }
                }
            }

            function imgPreviewUpdate2() {
                const sampul = document.querySelector('#sampulUpdate2');
                const imgPreview = document.querySelector('.img-previewUpdate2');

                const file = sampul.files[0];

                // Cek apakah file ada dan apakah tipe file adalah gambar
                if (file && file.type.startsWith('image/')) {
                    const fileReader = new FileReader();
                    fileReader.readAsDataURL(file);

                    fileReader.onload = function(e) {
                        imgPreview.src = e.target.result;
                    }
                }
            }

            function imgPreviewUpdate3() {
                const sampul = document.querySelector('#sampulUpdate3');
                const imgPreview = document.querySelector('.img-previewUpdate3');

                const file = sampul.files[0];

                // Cek apakah file ada dan apakah tipe file adalah gambar
                if (file && file.type.startsWith('image/')) {
                    const fileReader = new FileReader();
                    fileReader.readAsDataURL(file);

                    fileReader.onload = function(e) {
                        imgPreview.src = e.target.result;
                    }
                }
            }
        </script>
    </main>
@endsection('content')
