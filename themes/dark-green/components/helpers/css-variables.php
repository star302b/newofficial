<div id="colorsRoot">
    <style>
        /*Root colors*/
        :root {
            /*typography*/
            --text-color-dark: #333333;
            --text-color-light: #ffffff;
            --text-color-title: #0051e7;

            --text-size: 16px;

            /*background*/

            --site-header-bg: #000;

            --background-light: #ffffff;
            --background-variant-1: #04ad1c;
            --background-variant-2: #02d31f;
            --background-variant-3: #7645c9;
            --darl-bg: #333;

            /*Other*/

            --box-shadow: 0px 5px 20px 0px rgba(0, 0, 0, .3);
        }
    </style>
</div>

<!--Fonts Control-->
<div id="fontRoot">
    <style>
        /*@import url("https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap");*/
        @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
        @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css');
        

        body {
            font-family: 'Roboto', sans-serif;
            font-size: 18px;
        }

        .acc-content>div{
            padding: 1rem !important;
        }

        .site-footer ul{
            padding: 10px 0;
        }

        .modal-box .sign-area label,
        .modal-box .sign-area .form-bottom a,
        .modal-box .sign-area .form-bottom{
            color: var(--text-color-light)
        }

        .sign-area button{
            margin-top: 20px;
        }

        .acc-header:after{
            font-family: "Font Awesome\ 5 Free" !important;
        }

        .section-form{
            padding-left: 0 !important;
            padding-right: 0 !important;
        }

        @media screen and (max-width: 767px) {
            .steps-section--variant-1 .row {
                margin: 7em 0 0;
            }
            .steps-section--variant-1 .col{
                margin: 5em 0;
            }

            .lock-line svg{
                flex: 0 0 20px;
            }

            .lock-line .align-center p{
                font-size: 16px;
                line-height: 1.2;
                padding-left: 10px;
            }
        }

    </style>
</div>
