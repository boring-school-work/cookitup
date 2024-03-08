//Featured section
const featuredImage = document.querySelector("#featured-img");
const featuredText = document.querySelector("#featured-text");
const featuredName = document.querySelector("#featured-name");
const featuredRating = document.querySelector("#featured-rating");
const featuredDescription = document.querySelector("#featured-desc");
const featuredUsername = document.querySelector("#username");
const featuredUsericon = document.querySelector("#usericon");
const featuredLeftArrow = document.querySelector("#left-arrow");
const featuredRightArrow = document.querySelector("#right-arrow");

// Data arrays
const imageList = ["../../assets/images/Foods/Grilled_Cheese_008-1-c81076b16bc44caea8077666695be94d.jpg", "../../assets/images/Foods/Honey-Garlic-Chicken-Breast_4.png", "../../assets/images/Foods/pizza_cheese.webp", "../../assets/images/Foods/portal-cake-10.jpg"];
const nameList = ["Grilled Cheese Sandwiches", "Honey Garlic Chicken Breast", "Homemade Pizza", "Delicious Cake"];
const ratingList = [4, 5, 3, 1];
const descriptionList = ["A grilled cheese sandwich is not diet food. So when I have one, it has to be great! Crispy, salty, buttery exterior and oozy, molten cheese inside. Are you ready to meet the ultimate cheese toastie??",
"An epic 12 minute chicken breast recipe with a magic 5 ingredient Honey Garlic Sauce! This is a terrific back pocket quick dinner idea for busy nights that’s made with pantry staples.",
"Every great pizza begins with a great pizza crust. Some like it thin and crispy, while others prefer a thick and soft crust. This homemade pizza crust has it all: soft & chewy with a delicious crisp and AWESOME flavor.",
"This cake is great. It's so delicious and moist. Uh oh. Somebody cut the cake. I told them to wait for you, but they did it anyway. There is still some left, though, if you hurry to the recipe page."];
const usernameList = ["The Clean Goblin", "Mr. Afton", "Freeman", "<span style='font-family:Courier New'>Caroline</span>"];
const usericonList = ["../../assets/images/Users/a3lh4g4p0w881.jpg", "../../assets/images/Users/WillyA.webp", "../../assets/images/Users/FreemanAlyx.webp", "../../assets/images/Users/hero-image.webp"];
let foodNo = 0;

// Change functions
function changeFeaturedImage(image) {
    featuredImage.src = image;
}

function changeFeaturedName(name) {
    featuredName.innerHTML = name;
}

function changeFeaturedRating(rating) {
    featuredRating.src = "../../assets/images/" + rating + "-star.png";
}

function changeFeaturedDescription(description) {
    featuredDescription.innerHTML = description;
}

function changeFeaturedUsername(username) {
    featuredUsername.innerHTML = username;
}

function changeFeaturedUsericon(usericon) {
    featuredUsericon.src = usericon;
}


// Event Listeners

featuredLeftArrow.addEventListener("click", () => {
    console.log("Move left");

    foodNo--;
    if(foodNo < 0){
        foodNo = 3;
    }
    if(foodNo > 3){
        foodNo = 0;
    }

        changeFeaturedImage(imageList[foodNo]);
        changeFeaturedName(nameList[foodNo]);
        changeFeaturedRating(ratingList[foodNo]);
        changeFeaturedDescription(descriptionList[foodNo]);
        changeFeaturedUsername(usernameList[foodNo]);
        changeFeaturedUsericon(usericonList[foodNo]);
});

featuredRightArrow.addEventListener("click", () => {
    console.log("Move right");

    foodNo++;
    if(foodNo > 3){
        foodNo = 0;
    }
    if(foodNo < 0){
        foodNo = 3;
    }

    changeFeaturedImage(imageList[foodNo]);
    changeFeaturedName(nameList[foodNo]);
    changeFeaturedRating(ratingList[foodNo]);
    changeFeaturedDescription(descriptionList[foodNo]);
    changeFeaturedUsername(usernameList[foodNo]);
    changeFeaturedUsericon(usericonList[foodNo]);
});