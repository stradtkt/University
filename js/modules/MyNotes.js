import $ from 'jquery';

class MyNotes {
    constructor() {
        this.events();
    }
    events() {
        $(".delete-note").on("click", this.deleteNote);
        $(".edit-note").on("click", this.editNote.bing(this));
        $(".update-note").on("click", this.updateNote.bind(this));
    }

    editNote(e) {
        var thisNote = $(e.target).parents("li");
        if(thisNote.data("state") == "editable") {
            this.makeNoteReadOnly(thisNote);
        } else {
            this.makeNoteEditable(thisNote);
        }
    }

    makeNoteEditable(thisNote) {
        thisNote.find(".edit-note").html('<i class="fas fa-times" aria-hidden="true"></i> Cancel');
        thisNote.find(".note-title-field, .note-body-field").removeAttr("readonly").addClass("note-active-field");
        thisNote.find(".update-note").addClass("update-note--visible");
        thisNote.data("state", "editable");
    }
    makeNoteReadOnly(thisNote) {
        thisNote.find(".edit-note").html('<i class="far fa-edit" aria-hidden="true"></i> Edit');
        thisNote.find(".note-title-field, .note-body-field").attr("readonly", "readonly").removeClass("note-active-field");
        thisNote.find(".update-note").removeClass("update-note--visible");
        thisNote.data("state", "cancel");
    }

    deleteNote(e) {
        console.log('You Clicked Delete');
        var thisNote = $(e.target).parents("li");
        $.ajax({
            beforeSend: (xhr) => {
                xhr.setRequestHeader('X-WP-Nonce', universityData.nonce);
            },
            url: universityData.root_url + '/wp-json/wp/v2/notes/' + thisNote.data('id'),
            type: 'DELETE',
            success: (response) => {
                thisNote.slideUp();
                console.log("Congrats");
                console.log(response);
            },
            error: (response) => {
                console.log('Sorry');
                console.log(response);
            }
        });
    }

    updateNote(e) {
        console.log('You Clicked Delete');
        var thisNote = $(e.target).parents("li");
        var ourUpdatedPost = {
            'title': thisNote.find(".note-title-field").val(),
            'content': thisNote.find(".note-body-field").val()
        }
        $.ajax({
            beforeSend: (xhr) => {
                xhr.setRequestHeader('X-WP-Nonce', universityData.nonce);
            },
            url: universityData.root_url + '/wp-json/wp/v2/notes/' + thisNote.data('id'),
            type: 'POST',
            data: ourUpdatedPost,
            success: (response) => {
                this.makeNoteReadOnly(thisNote);
                console.log("Congrats");
                console.log(response);
            },
            error: (response) => {
                console.log('Sorry');
                console.log(response);
            }
        });
    }
}

export default MyNotes;