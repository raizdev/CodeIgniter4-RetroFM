const timelineLikes = document.querySelectorAll(".timelineLike");
timelineLikes.forEach(item => item.addEventListener("click", evt => {
    $.ajax({
        type: "POST",
        url: "interface.php?id=152",
        data: {timeline: item.parentElement.dataset.timeline},
        success: data => {
            let res = JSON.parse(data);
            item.innerHTML = '<i class="fas fa-thumbs-up" aria-hidden="true"></i> ' + res.likes;
            item.classList.add("active");
            if (res.unlike) {
                item.classList.remove("active")
            }
        }
    });
}));

const timelineComments = document.querySelectorAll(".timelineComments");
timelineComments.forEach(item => item.addEventListener("click", evt => {
	evt.preventDefault();
	evt.stopPropagation();
    $.ajax({
        type: "POST",
        url: "interface.php?id=152",
        data: {timelineModal: item.parentElement.dataset.timeline},
        success: data => {
            let res = JSON.parse(data);
            const tlMdl = document.querySelector(".timelineModal");
            const mdlCnt = tlMdl.querySelector(".modal-content .modal-body");
            mdlCnt.innerHTML = res.content;

            if (!tlMdl.classList.contains("show")) {
                $(tlMdl).modal("show");
            }
        }
    });
}));

document.querySelector(".timelineModal .modal-content").addEventListener("change", evt => {
    const writeComment = document.querySelector(".timelineCommentButton");
    writeComment.addEventListener("click", e => {
        e.preventDefault();
		e.stopPropagation();
        writeComment.innerHTML = '<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span> (missing text)';
        $.ajax({
            type: "POST",
            url: "interface.php?id=152",
            data: $(".writeComment").serialize(),
            success: data => {
                let res = JSON.parse(data);
                const mdlCnt = document.querySelector(".timelineModal .modal-content .modal-body");
                mdlCnt.innerHTML = res.content;

                setTimeout(() => {
                    let commentButton = document.querySelector(".timelineCommentButton");
                    commentButton.classList.toggle("success");
                    commentButton.innerHTML = '<i class="fas fa-paper-plane" aria-hidden="true"></i> Kommentieren';
                }, 10000);
            }
        })
    });

    const deleteComment = document.querySelectorAll(".timelineComments .commentBox > .commentAction .commentDelete");
    deleteComment.forEach(item => item.addEventListener("click", evt => {
        evt.preventDefault();
        writeComment.innerHTML = '<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span> (missing text)';
        $.ajax({
            type: "POST",
            url: "interface.php?id=152",
            data: {deleteComment: evt.dataset.timeline},
            success: data => {
                let res = JSON.parse(data);
                const mdlCnt = document.querySelector(".timelineModal .modal-content .modal-body");
                mdlCnt.innerHTML = res.content;

                setTimeout(() => {
                    let commentButton = document.querySelector(".timelineCommentButton");
                    commentButton.classList.toggle("success");
                    commentButton.innerHTML = '<i class="fas fa-paper-plane" aria-hidden="true"></i> Kommentieren';
                }, 10000);
            }
        })
    }));
});