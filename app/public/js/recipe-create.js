class Recipe {};
var recipe = new Recipe();

var prepares = [];
var newElPrepare;

class Ingredient {};
var ingre = new Ingredient();
var stepActive = 1;
var ingredients = [];

// ------------- STEP 1 Création ------------- //

/* Reset value input @param step */
var resetValueInput = (step) => {
    switch (step) {
        case 1:
            $('#recipe-name').val("");
            $('#recipe-difficulty').val("");
            $('#recipe-nbPerson').val("");
            $('#recipe-duration').val("");
            break;
        case 2:
            ingredients = [];
            $('#ingredient-nbr').val("");
            $('#ingredient-nbr-quantity').val("");
            $('#ingredient-name').val("");
            $('#ingredient-unity').val("");
            break;
    }
}

/* Valid form @param step */
var formValid = (step) => {
    arrayInputValStep1 = [$('#recipe-name').val(), $('#recipe-difficulty').val(), $('#recipe-nbPerson').val(), $('#recipe-duration').val()];
    var validName = false;
    var pattName = /^[a-zA-Z0-9-éè'àâ_ ]*$/;

    switch (step) {
        case 1:
            // Si le nom est valid
            if (pattName.test($('#recipe-name').val())) {
                $('#validationStep1Name').hide();
                validName = true;
            } else {
                $('#recipe-name').removeClass("border-info");
                $('#recipe-name').addClass("is-invalid");
                $('#validationStep1Name').show();
            }
            break;
    }
    return validName;
}

/* Reader img */
var readURL = (input, elementPreview) => {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            elementPreview.css('background-image', 'url(' + e.target.result + ')');
            elementPreview.hide();
            elementPreview.fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

// ------------- STEP 2 Ingrédients ------------- //

/* Ajouter ingrédients */
var addIngredients = () => {
    var newIngredient = "";
    if ($('#ingredient-unity').val() != "") {
        newIngredient = $('#ingredient-name').val() + " (" + $('#ingredient-nbr').val() + " " + $('#ingredient-unity').val() + ")";
    } else {
        newIngredient = $('#ingredient-name').val() + " (" + $('#ingredient-nbr').val() + ")";
    }
    var newElementBtn = "<div class='d-flex justify-center align-items-center'><a class='btn-remove-ingredient btn-danger p-2 align-middle text-center' style='cursor:pointer'>Supprimer</a><div></div>";
    var newElement = "<div class='d-flex justify-content-between w-100 p-2 border'><p style='width:80%;margin-bottom:0' class='p-2 '>" + newIngredient + "</p>" + newElementBtn;
    ingredients.push(newIngredient);
    $(newElement).appendTo($('#ingredient-list'));

    document.querySelectorAll('.btn-remove-ingredient').forEach(item => {
        item.addEventListener('click', function () {
            deleteIngredients();
            if (ingredients.length == 0) {
                $("#btn-step2").attr("disabled", true);
            } else {
                $("#btn-step2").attr("disabled", false);
            }
        });
    });
    // Reset inputs
    $('#ingredient-nbr').val("");
    $('#ingredient-nbr-quantity').val("");
    $('#ingredient-name').val("");
    $('#ingredient-unity').val("");
}

/* Supprimer ingrédients */
var deleteIngredients = () => {
    var parent = event.currentTarget.parentNode.parentNode;
    parent.remove();
    var ingredientsSelect = event.currentTarget.parentNode.parentNode.children[0].innerText;
    var indexEl = $.inArray(ingredientsSelect, ingredients);
    ingredients.splice(indexEl, 1);
}

/* Check if they are not value empty in form @param step / return true if they are not value empty in form */
var noIngredientsEmpty = () => {
    var noEmptyValue = false;
    var arrayInputIngredients = [];
    arrayInputIngredients = [$('#ingredient-name').val(), $('#ingredient-nbr').val()]
    if (arrayInputIngredients != [] && $.inArray("", arrayInputIngredients) == -1) {
        $("#btn-add-ingredients").attr("disabled", false);
        noEmptyValue = true;
    } else {
        $("#btn-add-ingredients").attr("disabled", true);
    }
    return noEmptyValue;
}

// ------------- STEP 1 & 2 Création et Ingrédients ------------- //

/* Check if they are not value empty in form @param step / return true if they are not value empty in form */
var noValueEmpty = (step) => {
    var noEmptyValue = false;
    var arrayInputValStep1 = [];
    arrayInputValStep1 = [$('#recipe-name').val(), $('#recipe-difficulty').val(), $('#recipe-nbPerson').val(), $('#recipe-duration').val()];
    arrayInputValStep2 = [$('#recipe-name').val(), $('#recipe-difficulty').val(), $('#recipe-nbPerson').val(), $('#recipe-duration').val()];

    switch (step) {
        case 1:
            if (arrayInputValStep1 != [] && $.inArray("", arrayInputValStep1) == -1) {
                $("#btn-step1").attr("disabled", false);
                noEmptyValue = true;
            } else {
                $("#btn-step1").attr("disabled", true);
            }
            break;
        case 2:
            if (ingredients != []) {
                $("#btn-step2").attr("disabled", false);
                noEmptyValue = true;
            } else {
                $("#btn-step2").attr("disabled", true);
            }
            break;
        default:
            break;
    }
    return noEmptyValue;
}

/* Valid input type number @param input, min, max */
var nbValidity = (input, min, max) => {
    input.onkeypress = e => {
        //  13: enter, +: 43 , -: 45
        if (13 == e.keyCode) input.blur();
        if ([43, 45].includes(e.keyCode)) return false;
    };
    input.onkeyup = e => {
        if (parseFloat(input.value) < min) {
            input.value = min;
        } else if (parseFloat(input.value) > max) {
            input.value = max;
        } else {
            input.value = parseFloat(input.value);
        }
    };
}

// ------------- STEP 3 Préparation ------------- //

var initPrepare = (content) => {
    let nbPrepare = prepares.length + 1;
    var stepNbPrepare = "<div class='ml-5 pl-2 mb-2' style='font-size:1.3rem'>Etape " + nbPrepare + " :</div>";
    var btnUpPrepare = "<button id='btn-up-prep" + nbPrepare + "' class='btn-arrow btn-up-prepare d-block m-0 mb-1 btn-warning border-0 p-2'><img src='..\\public\\images\\icons\\up-svg.png' height='100%' width='100%' alt=''></button>";
    var btnDownPrepare = "<button id='btn-down-prep" + nbPrepare + "' class='btn-arrow btn-down-prepare d-block m-0 mb-1 btn-warning border-0 p-2'><img src='..\\public\\images\\icons\\down-svg.png' height='100%' width='100%' alt=''></button>";
    var btnDeletePrepare = "<button id='btn-delete-prep" + nbPrepare + "' class='btn-del btn-delete-prepare d-block btn-danger border-0 p-2'><img src='..\\public\\images\\icons\\delete-svg.png' height='100%' width='100%' alt=''></button>";
    var textareaPrepare = "<textarea cols='30' rows='5' id='prep" + nbPrepare + "' class='prepareArea p-2 bg-white border m-0 border-info rounded' style='width:100%;resize: none'></textarea>";
    newElPrepare = "<div class='prepare'>" + stepNbPrepare + "<div class='d-flex mb-2 align-middle'><div class='d-flex justify-content-center px-2' style='width:5%;flex-direction:column;'>" + btnUpPrepare + btnDownPrepare + btnDeletePrepare + "</div>" + textareaPrepare + "</div></div>";;
    prepares.push(content);

    $(newElPrepare).appendTo($('#prepares'));

    $("#btn-up-prep" + nbPrepare).on("click", function () {
        prepares[nbPrepare - 1] = $('#prep' + nbPrepare).val();
        if (nbPrepare == 1) {
            return false;
        }
        permutation(nbPrepare, nbPrepare - 1);
    });

    $("#btn-down-prep" + nbPrepare).on("click", function () {
        prepares[nbPrepare - 1] = $('#prep' + nbPrepare).val();
        if (nbPrepare == prepares.length) {
            return false;
        }
        permutation(nbPrepare, nbPrepare + 1);
    });
}

function permutation(oldStep, newStep) {
    let oldContent = $('#prep' + oldStep).val();
    let newContent = $('#prep' + newStep).val();
    $('#prep' + oldStep).val(newContent);
    $('#prep' + newStep).val(oldContent);
    prepares[oldStep - 1] = newContent;
    prepares[newStep - 1] = oldContent;

}

/* Ajouter un commentaire */
var addPrepare = () => {
    let nbPrepare = prepares.length;
    prepares[nbPrepare - 1] = $("#prep" + nbPrepare).val();
    initPrepare("");
    return prepares;
}

/* Ajouter un commentaire */
var addPrepareValue = () => {
    let nbPrepare = prepares.length;
    prepares[nbPrepare - 1] = $("#prep" + nbPrepare).val();
}

// ------------- STEP 4 Validation ------------- //

// ------------- ALL STEPS ------------- //

/* Check if input isn't empty @inputval / return true if is not empty */
var notEmptyInput = (inputVal) => {
    var isNotEmpty = false;
    inputVal != "" || inputVal != " " ? isNotEmpty = true : false;
    return isNotEmpty;
}

/* Check if input is a number @param inputVal / return true if is a number */
var isNumber = (inputVal) => {
    var isANbr = false;
    parseInt(inputVal) != NaN ? isANbr = true : false;
    return isANbr;
}

/* Update recipe datas value */
var updateRecipe = () => {
    recipe.name = $('#recipe-name').val();
    recipe.imgFileName = $('#recipe-img').val();
    recipe.difficulty = $('#recipe-difficulty').val();
    recipe.nbrPerson = $('#recipe-nbPerson').val();
    recipe.time = $('#recipe-duration').val();
    recipe.ingredients = ingredients;
    recipe.prepares = prepares;

    $('#input-name').val(recipe.name);
}

/* Update recipe confirmation datas value */
var recipeValidationValue = () => {
    var backgroundImage = $('#image-preview').css('background-image');
    $('#valid-image-preview').css('background-image', backgroundImage);
    $("#valid-recipe-name").text(recipe.name);
    $("#valid-recipe-difficulty").text(recipe.difficulty + "/5");
    $("#valid-recipe-nbPerson").text(recipe.nbrPerson + " Personnes");
    $("#valid-recipe-duration").text(recipe.time + " Minutes");
    $("#valid-list-ingredient").empty();
    for (var i = 0; i < recipe.ingredients.length; i++) {
        $("#valid-list-ingredient").append("<li class='list-unstyled'>" + recipe.ingredients[i] + "</li>");
    }
    $("#valid-list-prepare").empty();
    for (var i = 0; i < recipe.prepares.length; i++) {
        let nbStep = i + 1;
        $("#valid-list-prepare").append("<li class='list-unstyled mb-1' style='font-size:1.2rem'>Etape " + nbStep + "</li>");
        $("#valid-list-prepare").append("<li class='list-unstyled bg-light border mb-2'>" + recipe.prepares[i] + "</li>");
    }
}

// ---------------------------------------------------------------------------------- //

/* Show step x @param step */
function showStep(step) {
    $('.step').each(function () {
        $(this).css('display', 'none');
    });
    switch (step) {
        case 1:
            stepActive = 1;
            $("#nbr-step1").addClass('active-step');
            $('#rc-step1').css('display', 'block');
            $('#progress-recipe-create').css('width', '25%');
            // Valid inputs type number
            for (i = 0; i < $('.input-nb').length; i++) {
                nbValidity($('.input-nb')[i], $('.input-nb')[i].getAttribute('min'), $('.input-nb')[i].getAttribute('max'));
            }
            break;
        case 2:
            stepActive = 2;
            $("#nbr-step2").addClass('active-step');
            $('#rc-step2').css('display', 'block');
            $('#progress-recipe-create').css('width', '50%');
            break;
        case 3:
            stepActive = 3;
            $("#nbr-step3").addClass('active-step');
            $('#rc-step3').css('display', 'block');
            $('#progress-recipe-create').css('width', '75%');
            if (prepares.length == 0) {
                initPrepare();
            }
            break;
        case 4:
            stepActive = 4;
            $("#nbr-step4").addClass('active-step');
            $('#rc-step4').css('display', 'block');
            $('#progress-recipe-create').css('width', '100%');
            break;
        default:
            stepActive = 5;
            $('#rc-step5').css('display', 'block');
            $('#progress-recipe-create').css('width', '100%');
            break;
    }
    updateRecipe();
    recipeValidationValue();
}

$(document).ready(function () {

    // Start to show step
    showStep(1);

    // Load image-preview
    $("#recipe-img").change(function () {
        readURL(this, $('#image-preview'))
    });

    // ---- Step 1 ----

    // Button Cancel
    $('#btn-cancel-step1').click(function () {
        resetValueInput(stepActive);
        noValueEmpty(stepActive);
    });
    // Inputs
    $('.input-step1').on('keyup change mousedown', function () {
        if (noValueEmpty(stepActive)) {
            // Button Valid step
            $("#btn-step1").click(function () {
                if (formValid(stepActive)) {
                    showStep(2)
                    $("#nbr-step1").removeClass('active-step');
                }
            });
        }
    });

    // ---- Step 2 ----

    // Quand on modifie les inputs ingredientName et ingredientQuantity
    $('.input-ingredient').on('keyup change mousedown', function () {
        //Si les champs sont remplis
        if (noIngredientsEmpty(stepActive)) {
            $("#btn-add-ingredients").attr("disabled", false);
        } else {
            $("#btn-add-ingredients").attr("disabled", true);
        }
    });
    // Button "Ajouter"
    $('#btn-add-ingredients').on("click", function () {
        addIngredients();
        $("#btn-step2").attr("disabled", false);
        $("#btn-add-ingredients").attr("disabled", true);
    });
    // Button "Précedent"
    $('#btn-step2P').click(function () {
        showStep(1);
        $("#nbr-step2").removeClass('active-step');
    });
    // Button "Valider"
    $('#btn-step2').click(function () {
        showStep(3);
        $("#nbr-step2").removeClass('active-step');
    });

    // ---- Step 3 ----

    // Button add comment
    $('#btn-add-prepare').on("click", addPrepare);
    // Button "Valider"
    $('#btn-step3').click(function () {
        addPrepareValue();
        showStep(4);
        $("#nbr-step3").removeClass('active-step');
    });
    // Button "Précedent"
    $('#btn-step3P').click(function () {
        showStep(2);
        $("#nbr-step3").removeClass('active-step');
    });

    // ---- Step 4 ----

    // Button "Valider"
    $('#btn-step4').click(function () {
        showStep(5);
        $("#nbr-step4").removeClass('active-step');
    });
    // Button "Précedent"
    $('#btn-step4P').click(function () {
        showStep(3)
        $("#nbr-step4").removeClass('active-step');
    });

})