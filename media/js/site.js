
function createItem(value)
{
    var input          = document.createElement("input");
    input.type         = "text";
    input.autocomplete = "off";
    input.value        = value;
    input.name         = "items[]";

    return input;
}

function appendItem()
{
    var storage = document.getElementById("storage");
    var item = document.getElementById("item");

    var input = createItem(item.value);
    storage.insertBefore(input, storage.firstChild);
    var br = document.createElement("br");
    var close = document.createElement("a");
    close.innerHTML = "X";
    close.addEventListener('click', function(){
        input.remove();
        close.remove();
        br.remove();
        item.focus();
        return false;
    });

    storage.insertBefore(close, storage.firstChild);
    storage.insertBefore(br, storage.firstChild);

    item.value = "";
    item.focus();

    document.getElementById("submit").style.display = "block";
    return false;
}