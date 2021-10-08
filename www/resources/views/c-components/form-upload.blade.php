<label class="form-control-label" for="imageFromUpload">
    Image:&emsp;
    <a href="#" onclick="addMoreImageForm()">
        <span class="fa fa-plus-circle"></span> more image
    </a>
</label>
<div id="fromUploadGruop" class="input-group">
    <input class="form-control" name="image[]" type="file" multiple>
    <div class="input-group-append">
        <span class="input-group-text">
            <a href="#" onclick="addMoreImageForm()">
                <span class="fa fa-clone"></span>
            </a>
        </span>
    </div>
</div>
<br>
<br><br>
<script>
    var index = 1;
    var current = 1;
    var limit = 5;
    function addMoreImageForm() {
        if (current < limit) {
            /* Create copied from upload */
            var html = '<div id="imgBox'+index+'" class="input-group" style="margin-top:5px;">';
            html = html + '<input class="form-control" name="image[]" type="file" multiple>'; 
            html = html + '<div class="input-group-append">';
            html = html + '<span class="input-group-text">';
            html = html + '<a href="#" class="text-danger" onclick="removeImageForm(imgBox'+index+')">&nbsp;';
            html = html + '<span class="fa fa-times"></span></a>'
            html = html + '</span></div></div>';
            $("#fromUploadGruop").append(html);
            index++;
            current++;
        } else {
            alert('Image upload limit is 5 picture.');
        }
    }
    function removeImageForm(id) {
        $(id).remove();
        current--;
    }
</script>