<style>
    :root {
        --beige: #ffc10740;
        --red: #df2f38;
        --green: #0c5f2c;
        --brown: #221c09;
        --mush: #614314;
        --old-white: #f3efe9;
    }

    h1~h6 {
        color: var(--brown) !important;
    }

    p,
    label,
    input,
    a,
    span,
    hr {
        color: #614e14 !important;
    }

    a {
        color: inherit;
        text-decoration: none;
    }

    a:hover {
        color: #3e2f03 !important;
        text-decoration: underline;
    }


    /* Autofill styles */
    input:-webkit-autofill,
    input:-webkit-autofill:focus {
        transition: background-color 600000s 0s, color 600000s 0s;
    }

    input[data-autocompleted] {
        background-color: transparent !important;
        color: none !important;
    }

    ::placeholder {
        color: #dbd5c3;
    }

    .c-brown {
        color: var(--brown) !important;
    }

    .c-old-white {
        color: var(--old-white) !important;
    }

    .bg-old-white {
        background-color: var(--old-white) !important;
    }

    .dm-serif {
        font-family: "DM Serif Text", serif;
        font-weight: 300;
        font-style: normal;
    }

    .dm-serif-italic {
        font-family: "DM Serif Text", serif;
        font-weight: 400;
        font-style: italic;
    }

    .bg-universal {
        background-color: var(--beige) !important;
    }

    .col-form-label {
        font-weight: 550;
    }

    .heading-sk {
        color: var(--brown);
        font-family: "DM Serif Text", serif;
        font-size: 3.5em;
        line-height: 55px;
        letter-spacing: -2px;
        text-align: center;
    }

    .btn.btn-watermelon {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 10px;
        border-radius: 32px;
        color: var(--old-white);
        background: linear-gradient(90deg, var(--red) -26.92%, var(--green) 100%);
        box-shadow: 0px 4px 33.7px 0px rgba(97, 62, 20, 1);
        transition: background 0.3s ease, transform 0.2s ease, box-shadow 0.2s ease;
    }

    .btn.btn-watermelon:hover {
        background: linear-gradient(90deg, var(--green) -26.92%, var(--red) 100%);
        transform: translateY(-2px);
        box-shadow: 0px 6px 35px rgba(97, 62, 20, 0.8);
        color: var(--old-white);
    }

    .btn.btn-watermelon:active {
        background: linear-gradient(90deg, var(--red) -26.92%, var(--green) 100%);
        transform: translateY(0);
        box-shadow: 0px 2px 20px rgba(97, 62, 20, 0.6);
    }

    .btn.btn-watermelon:focus {
        outline: none;
        box-shadow: 0px 0px 10px 2px rgba(97, 62, 20, 0.8);
    }

    .font-14px {
        font-size: 14px;
    }

    .d-flex-center {
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>