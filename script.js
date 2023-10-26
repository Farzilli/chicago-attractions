const closeCard = () => {
    document.querySelectorAll(".card-open").forEach((e) => {
        e.classList = "card";
    });
};

const scrollTo = (z) => {
    document.body.scrollTop = z;
    document.documentElement.scrollTop = z;
};

const lockScroll = () => {
    let scrollPosition = document.body.scrollTop || document.documentElement.scrollTop;
    document.body.style.position = "fixed";
    document.body.style.top = `0`;
    document.body.style.width = "100%";
};

const unlockScroll = () => {
    document.body.style.position = "";
    document.body.style.top = "";
    document.body.style.width = "";
};

document.querySelector(".city-name").addEventListener("click", () => {
    scrollTo(0);
});

document.querySelector("#more").addEventListener("click", () => {
    scrollTo(750);
});

document.querySelectorAll(".card").forEach((e) => {
    e.addEventListener("click", () => {
        closeCard();
        e.classList = "card-open";
        lockScroll();
    });
});

document.querySelectorAll(".exit-btn").forEach((e) => {
    e.addEventListener("click", () => {
        setTimeout(() => {
            closeCard();
            unlockScroll();
        }, 1);
    });
});

window.onscroll = () => {
    let height = document.body.scrollTop || document.documentElement.scrollTop;
    document.querySelector("nav").id = height > 0 ? "dark" : "";
};
