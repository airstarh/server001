<?php
// require_once __DIR__ . '/BorgToolKit/index.php';
?>



<style>
    .input-switcher {
        & input {
            display: none;
        }

        /* SWITCH CONTAINER */
        & input+label {
            display: inline-block;
            position: relative;
            width: 50px;
        }

        /* SWITCH OVAL */
        & input+label:before {
            color: #ffffff;
            width: 50px;
            height: 20px;
            background: #666666;
            border-radius: 50px;
            position: absolute;
            right: 0
        }

        /* SWITCH CIRCLE */
        & input+label:after {
            content: '';
            width: 18px;
            height: 18px;
            border-radius: 50px;
            position: absolute;
            background: #ffffff;
        }

        /* UN-CHECKED */
        & input+label:before {
            content: 'off';
            text-indent: 25px;
            background: #999999;
        }

        & input+label:after {
            right: 29px;
            top: 1px;
        }

        /* CHECKED */
        & input:checked+label:before {
            content: 'on';
            text-indent: 5px;
            background: #70d3c3;
        }

        & input:checked+label:after {
            right: 1px;
            top: 1px;
        }
    }
</style>


<p id="lorem-ipsum">
    <label for="XXX">XXX</label>
    <span class="input-switcher">
        <input type="checkbox" id="XXX" name="XXX" value="1" />
        <label for="XXX">&nbsp;</label>
    </span>
</p>