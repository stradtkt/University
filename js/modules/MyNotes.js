import $ from 'jquery';

class MyNotes {
    constructor() {
        this.events();
    }
    events() {
        $(".delete-note").on("click", this.deleteNote);
    }

    deleteNote() {
        console.log('You Clicked Delete');
    }
}

export default MyNotes;