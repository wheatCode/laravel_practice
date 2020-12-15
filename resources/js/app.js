require("./bootstrap");

$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
    }
});

insertBlog = function() {
    window.location.href = "/admin/blogs/create";
};

updateBlog = function(blog_id) {
    window.event.preventDefault();
    const title = document.getElementById("title").value;
    const content = document.getElementById("content").value;
    $.ajax({
        url: `/admin/blogs/${blog_id}`,
        data: { title, content },
        type: "PUT",
        success(req) {
            console.log(req);
            window.location.href = "/admin/blogs/";
        }
    });
};

destoryBlog = function(blog_id, singPage) {
    $.ajax({
        url: `/admin/blogs/${blog_id}`,
        type: "DELETE",
        success(req) {
            singPage ? (window.location.href = "/admin/blogs/") : history.go(0);
        }
    });
};
