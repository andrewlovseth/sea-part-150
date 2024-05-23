const Header = {
    faqs() {
        const questions = document.querySelectorAll(".faq__question");

        questions.forEach((question) => {
            question.addEventListener("click", function () {
                const answer = this.nextElementSibling;
                answer.style.display = answer.style.display === "block" ? "none" : "block";
                this.classList.toggle("active");
            });
        });
    },

    init: function () {
        this.faqs();
    },
};

export default Header;
