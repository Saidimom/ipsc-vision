<style>
    body {font-family: Arial, Helvetica, sans-serif;}

    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
        position: relative;
        background-color: #fefefe;
        margin: auto;
        padding: 0;
        border: 1px solid #888;
        width: 80%;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
        -webkit-animation-name: animatetop;
        -webkit-animation-duration: 0.4s;
        animation-name: animatetop;
        animation-duration: 0.4s
    }

    /* Add Animation */
    @-webkit-keyframes animatetop {
        from {top:-300px; opacity:0}
        to {top:0; opacity:1}
    }

    @keyframes animatetop {
        from {top:-300px; opacity:0}
        to {top:0; opacity:1}
    }

    /* The Close Button */
    .close {
        color: white;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

    .modal-header {
        padding: 2px 16px;
        background-color: #5cb85c;
        color: white;
    }

    .modal-body {padding: 2px 16px;}

    .modal-footer {
        padding: 2px 16px;
        background-color: #5cb85c;
        color: white;
    }
</style>


<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <h2>New Inquiry</h2>
            <span class="close">&times;</span>

        </div>
        <div class="modal-body">

            <div class="form-group m-form__group row">
                <label for="example-text-input" class="col-2 col-form-label">
                    Title
                </label>
                <div class="col-7">
                    {!! Form::text('title', old('title'), ['class' => 'form-control m-input', 'placeholder' => 'Enter title']) !!}
                </div>
            </div>

            <div class="form-group m-form__group row">
                <label for="example-text-input" class="col-2 col-form-label">
                    Text
                </label>
                <div class="col-7">
                    {!! Form::textarea('text', old('text'), ['class' => 'form-control m-input', 'placeholder' => 'Enter text']) !!}
                </div>
            </div>

        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-info m-btn m-btn--air m-btn--custom">
                Start
            </button>
        </div>
    </div>

</div>

<script>
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];


    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
        document.getElementById("inquiryId").disabled = true;
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    }
</script>


<!-- The Modal -->
<div id="myModal2" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <h2>Add to exist</h2>
            <span class="close">&times;</span>

        </div>
        <div class="modal-body">

            <div class="form-group m-form__group row">
                <label for="example-text-input" class="col-2 col-form-label">
                    Inquiry
                </label>
                <div class="col-7">
                    <select id="inquiryId" name="inquiry_id" class="form-control">
                        @foreach(\App\Inquiry::all()->sortByDesc('created_at') as $inq)
                            <option value="{{ $inq->id }}">{{ $inq->title }}</option>
                        @endforeach
                    </select>
                </div>
            </div>




        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-info m-btn m-btn--air m-btn--custom">
                Start
            </button>
        </div>
    </div>

</div>

<script>
    // Get the modal
    var modal2 = document.getElementById('myModal2');

    // Get the button that opens the modal
    var btn2 = document.getElementById("myBtn2");

    // Get the <span> element that closes the modal
    var span2 = document.getElementsByClassName("close")[1];

    // When the user clicks the button, open the modal
    btn2.onclick = function() {
        modal2.style.display = "block";
        document.getElementById("inquiryId").disabled = false;
    }

    // When the user clicks on <span> (x), close the modal
    span2.onclick = function() {
        modal2.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target === modal2) {
            modal2.style.display = "none";
        }
    }
</script>