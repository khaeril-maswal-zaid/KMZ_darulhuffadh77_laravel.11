@extends('layout.admin-template')

@section('content')
    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light px-4 rounded">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
                <h1 class="h5">BLOG
                    {{ $blogs->first()->kategori->category == 'khusus-umum-165' ? 'DEFAULT' : Str::upper(Str::replace('-', ' ', $blogs->first()->kategori->category)) }}
                </h1>

                @if ($blogs->first()->kategori->category != 'khusus-umum-165')
                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
                        Create new
                    </button>
                @endif
            </div>
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

        <div class="bg-light rounded h-100 p-4">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">#</th>
                        <th scope="col" class="text-center">Date</th>
                        <th scope="col" class="text-center">Title</th>
                        <th scope="col" class="text-center">Author</th>
                        <th scope="col" class="text-center">Vi</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blogs as $index => $blog)
                        <tr>
                            <th scope="row" class="align-middle">{{ $blogs->firstItem() + $index }}</th>
                            <td class="align-middle text-center" nowrap>{{ $blog->created_at }}</td>
                            <td class="align-middle">{{ $blog->title }} </td>
                            <td class="align-middle" nowrap>{{ $blog->oleh }} </td>
                            <td class="align-middle text-center">{{ $blog->visit }}</td>
                            <td class="text-center align-middle">
                                <a href="/" class="btn btn-success btn-sm">View</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $blogs->onEachSide(0)->links() }}
        </div>
    </div>

    @if ($blogs->first()->kategori->category != 'khusus-umum-165')
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">

                    <form action="{{ route('blogger.create') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="bodyartikel1" id="isinaArtikel1" value="Darul Huffadh 77 -bug">
                        <input type="hidden" name="bodyartikel2" id="isinaArtikel2" value="Darul Huffadh 77 -bug">
                        <input type="hidden" name="categoryid" value="{{ $blogs->first()->category_id }}">

                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Create New Article</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-floating mb-2">
                                        <input name="judul" type="text"
                                            class="form-control @error('judul') is-invalid @enderror" id="judulberita"
                                            placeholder="Judul Berita" value="{{ old('judul') }}">
                                        <label for="judulberita">Article Title</label>
                                        @error('judul')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-floating mb-2">
                                        <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror"
                                            placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px; resize: vertical;">{{ old('deskripsi') }}</textarea>
                                        <label for="floatingTextarea">Article Description</label>
                                        @error('deskripsi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <div id="editor1" class="@error('editor1') is-invalid @enderror">
                                            {!! old('bodyartikel1') !!}</div>
                                        @error('editor1')
                                            <div class="invalid-feedback mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <div id="editor2" class="@error('editor2') is-invalid @enderror">
                                            {!! old('bodyartikel2') !!}</div>
                                        @error('editor2')
                                            <div class="invalid-feedback mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating mb-2">
                                        <select name="oleh" class="form-select @error('oleh') is-invalid @enderror"
                                            id="olehselect" aria-label="Floating label select example">
                                            <option value="">Select</option>
                                            <option {{ old('oleh') == Auth::user()->name ? 'selected' : '' }}>
                                                {{ Auth::user()->name }}</option>
                                            <option value="cuctom" {{ old('oleh') == 'cuctom' ? 'selected' : '' }}>Custom
                                            </option>
                                        </select>
                                        <label for="olehselect">Author</label>
                                        @error('oleh')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-floating mb-2">
                                        <input name="olehlainnya" type="text" readonly
                                            class="form-control @error('olehlainnya') is-invalid @enderror"
                                            id="penuliscustom" placeholder="Oleh lainnya"
                                            value="{{ old('olehlainnya') }}">
                                        <label for="penuliscustom">Custom author</label>
                                        @error('olehlainnya')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <hr>

                                    <div class="mb-2">
                                        <div class="form-floating mb-2">
                                            <input name="image1" type="file"
                                                class="form-control @error('image1') is-invalid @enderror"
                                                id="sampul1"onchange="imgPreview1()">
                                            <label for="sampul1">Main image</label>
                                            @error('image1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="W-100">
                                            <img src="{{ asset('assets/img/image-default.jpg') }}"
                                                class="img-thumbnail img-fluid img-preview1" alt="default">
                                        </div>
                                    </div>

                                    <div class="mb-2">
                                        <div class="form-floating">
                                            <input name="image2" type="file"
                                                class="form-control @error('image2') is-invalid @enderror" id="sampul2"
                                                onchange="imgPreview2()">
                                            <label for="samoul2">Additional 1 image</label>
                                            @error('image2')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="W-100">
                                            <img src="{{ asset('assets/img/image-default.jpg') }}"
                                                class="img-thumbnail img-fluid img-preview2" alt="default">
                                        </div>
                                    </div>

                                    <div class="mb-2">
                                        <div class="form-floating mb-2">
                                            <input name="image3" type="file"
                                                class="form-control @error('image3') is-invalid @enderror" id="sampul3"
                                                onchange="imgPreview3()">
                                            <label for="sampul3">Additional 2 image</label>
                                            @error('image3')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="W-100 ">
                                            <img src="{{ asset('assets/img/image-default.jpg') }}"
                                                class="img-thumbnail img-fluid img-preview3" alt="default">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="ckeditor-script">
            <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/super-build/ckeditor.js"></script>

            <script>
                // This sample still does not showcase all CKEditor&nbsp;5 features (!)
                // Visit https://ckeditor.com/docs/ckeditor5/latest/features/index.html to browse all the features.
                CKEDITOR.ClassicEditor.create(document.getElementById("editor1"), {
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
                        const valTupoksi = document.getElementById('isinaArtikel1');
                        valTupoksi.value = editor.getData();

                        editor.model.document.on('change:data', () => {
                            valTupoksi.value = editor.getData();
                        });
                    });
                CKEDITOR.ClassicEditor.create(document.getElementById("editor2"), {
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
                        const valTupoksi = document.getElementById('isinaArtikel2');
                        valTupoksi.value = editor.getData();

                        editor.model.document.on('change:data', () => {
                            valTupoksi.value = editor.getData();
                        });
                    });
            </script>
        </div>

        <script>
            function imgPreview1() {
                const sampul = document.querySelector('#sampul1');
                const imgPreview = document.querySelector('.img-preview1');

                const file = sampul.files - > first();

                // Cek apakah file ada dan apakah tipe file adalah gambar
                if (file && file.type.startsWith('image/')) {
                    const fileReader = new FileReader();
                    fileReader.readAsDataURL(file);

                    fileReader.onload = function(e) {
                        imgPreview.src = e.target.result;
                    }
                }
            }

            function imgPreview2() {
                const sampul = document.querySelector('#sampul2');
                const imgPreview = document.querySelector('.img-preview2');

                const file = sampul.files - > first();

                // Cek apakah file ada dan apakah tipe file adalah gambar
                if (file && file.type.startsWith('image/')) {
                    const fileReader = new FileReader();
                    fileReader.readAsDataURL(file);

                    fileReader.onload = function(e) {
                        imgPreview.src = e.target.result;
                    }
                }
            }

            function imgPreview3() {
                const sampul = document.querySelector('#sampul3');
                const imgPreview = document.querySelector('.img-preview3');

                const file = sampul.files - > first();

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

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const selectOption = document.getElementById('olehselect');
                const inputLainnya = document.getElementById('penuliscustom');

                if (selectOption.value === 'cuctom') {
                    inputLainnya.readOnly = false;
                }

                selectOption.addEventListener('change', function() {
                    if (selectOption.value === 'cuctom') {
                        inputLainnya.value = '';
                        inputLainnya.readOnly = false;
                    } else {
                        inputLainnya.value = selectOption.value
                        inputLainnya.readOnly = true;
                    }
                });
            });
        </script>
    @endif
    <!-- Table End -->
@endsection('content')
