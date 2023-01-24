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
        @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
        
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
           content: '';
        }

        .acc-header:before{
            content: '';
            border: 2px solid;
            border-color: transparent transparent var(--text-color-light) var(--text-color-light);
            position: absolute;
            top: 0;
            bottom: 0;
            right: 1em;
            margin: auto;
            width: 0.3em;
            height: 0.3em;
            z-index: 2;
            transform: translate(-11px, -2px) rotate(-45deg);
            transition: .3s;
        }

        .acc-header.open:before{
            transform: translate(-11px, 2px) rotate(-225deg);
        }
      
        .steps-section--variant-1 .step-item .fas svg{
            max-heigh: 50%;
            max-width: 50%;
            object-fit: contain;
        }

        .steps-section--variant-1 .step-item .fas svg path{
            fill: var(--text-color-light)
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
