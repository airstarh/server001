<?php
// require_once __DIR__ . '/BorgToolKit/index.php';
?>

<style>
    /* the interesting bit */
    .label {
        pointer-events: none;
        display: flex;
        align-items: center;
    }

    .switch,
    .input:checked+.label .left,
    .input:not(:checked)+.label .right {
        pointer-events: all;
        cursor: pointer;
    }

    /* most of the stuff below is the same as the W3Schools stuff,
    but modified a bit to reflect changed HTML structure */

    .input {
        display: none;
    }

    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: 0.4s;
        transition: 0.4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: 0.4s;
        transition: 0.4s;
    }

    input:checked+.label .slider {
        background-color: #2196f3;
    }

    input:focus+.label .slider {
        box-shadow: 0 0 1px #2196f3;
    }


    input:checked+.label .slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }

    /* styling to make it look like your screenshot */

    .left,
    .right {
        margin: 0 .5em;
        font-weight: bold;
        text-transform: uppercase;
        font-family: sans-serif;
    }
</style>


<input class="input" id="toggle" type="checkbox">

<label class="label" for="toggle">
    <div class="left">
        Option A
    </div>

    <div class="switch">
        <span class="slider round"></span>
    </div>

    <div class="right">
        Option B
    </div>
</label>