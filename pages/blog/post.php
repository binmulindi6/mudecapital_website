<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUDECAPITAL | POST BLOG</title>
    <link rel="stylesheet" href="/public/assets/css/style.css">
    <!-- Place the first <script> tag in your HTML's <head> -->
    <script src="https://cdn.tiny.cloud/1/ofzzc0lfzdtbw1o3ymvs0c9dfqf5qpg5gqetr2qc5dgdtmxs/tinymce/7/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script src="/public/assets/js/blog.js" defer></script>
</head>

<body>
    <script>
    tinymce.init({
        selector: 'textarea',
        plugins: 'ai anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate ai mentions tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss markdown',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
        mergetags_list: [{
                value: 'First.Name',
                title: 'First Name'
            },
            {
                value: 'Email',
                title: 'Email'
            },
        ],
        ai_request: (request, respondWith) => respondWith.string(() => Promise.reject(
            "See docs to implement AI Assistant")),
    });
    </script>

    <div class="flex flex-col w-full items-center justify-center gap-4 p-2 md:p-5">
        <span class="text-10 md:w-10/12 font-bold">Mère Jo - Blog Post</span>
        <form id="frm-blog" enctype="multipart/form-data" class=" flex flex-col md:w-10/12" action="/api/blogs/post"
            method="post">
            <div class="mb-2">
                <label for="exampleInputEmail1" class="block text-sm font-medium mb-1 text-gray-600">Blog Title <span
                        class="text-red-500">*</span></label>
                <input id="blog-title" type="text" required name="title"
                    class="py-2 px-4 leading-6 block w-full border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0"
                    id="exampleInputEmail1" placeholder="Blog Title" />
            </div>
            <div class="mb-2">
                <label for="exampleInputEmail1" class="block text-sm font-medium mb-1 text-gray-600">Blog Author <span
                        class="text-red-500">*</span></label>
                <input id="blog-author" type="text" required name="author"
                    class="py-2 px-4 leading-6 block w-full border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0"
                    id="exampleInputEmail1" placeholder="Blog Author" />
            </div>
            <div class="mb-5">
                <label for="exampleInputEmail1" class="block text-sm font-medium mb-1 text-gray-600">Blog Small
                    Description <span class="text-red-500">*</span></label>
                <input id="blog-desc" type="text" required name="description"
                    class="py-2 px-4 leading-6 block w-full border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0"
                    id="exampleInputEmail1" placeholder="Blog Description" />
            </div>
            <div class="mb-2">
                <label for="exampleInputEmail1" class="block text-sm font-medium mb-1 text-gray-600">Blog Cover <span
                        class="text-red-500">*</span></label>
                <input id="blog-cover" type="file" required name="cover"
                    class="py-2 px-4 leading-6 block w-full border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0"
                    id="exampleInputEmail1" placeholder="Blog Title" />
            </div>
            <div class="mb-2 w-full">
                <textarea id="blog-body" required name="body">
                    Welcome to TinyMCE!
                </textarea>
            </div>
            <div class="input-group w-ful">
                <button id="btn-post-blog"
                    class="w-full  text-center items-center text-sm bg-primary text-white font-medium leading-6 text-center  select-none py-2 px-4 rounded-md transition-all hover:shadow-lg hover:shadow-primary/80">Poster</button>
            </div>
        </form>
    </div>
</body>

</html>