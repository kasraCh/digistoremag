    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png"
        href="https://www.digikala.com/mag/wp-content/themes/digikalamag/assets/common/img/ms-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="144x144"
        href="https://www.digikala.com/mag/wp-content/themes/digikalamag/assets/common/img/ms-icon-144x144.png">
    <link rel="stylesheet" href="{{ asset('digimag/assets/css/blog-slider.css') }}">
    <title>دیجی استور مگ | تکنولوژی، بازی های کامپیوتری</title>
    <!--    font-->
    <link rel="stylesheet" href="{{ asset('digimag/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('digimag/assets/css/materialdesignicons.css') }}">
    <link rel="stylesheet" href="{{ asset('digimag/assets/css/materialdesignicons.css.map') }}">
    <!--    font-->
    <link rel="stylesheet" href="{{ asset('digimag/assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('digimag/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('digimag/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('digimag/assets/css/responsive.css') }}">

    <style>
        .search-box {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px 20px;
            text-align: right;
        }

        .search-title {
            font-size: 15px;
            color: #333;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .search-form {
            display: flex;
            justify-content: flex-start;
            gap: 8px;
            align-items: center;
        }

        .search-input {
            flex: 1;
            border: 1px solid #ccc;
            border-radius: 6px;
            padding: 6px 10px;
            font-size: 14px;
            text-align: right;
            transition: all 0.2s ease;
        }

        .search-input:focus {
            border-color: #ff3b3b;
            outline: none;
        }

        .search-btn {
            background: #4b4dc6;
            color: #fff;
            border: none;
            border-radius: 6px;
            padding: 6px 16px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: background 0.2s ease;
        }

        .search-btn:hover {
            background: #3d3b8b;
        }

        @media (max-width: 768px) {
            .search-form {
                flex-direction: column;
                align-items: stretch;
            }

            .search-btn {
                width: 100%;
            }
        }

        .sticky {
            position: sticky;
            top: 20px;
            width: 100vw;
            height: 25px;
            font-weight: 700;
            color: white;
            padding-bottom: 20px;
        }


        html {
            height: 100%;
        }

        body {
            min-height: 100%;
            flex-direction: column;
        }

        .custom-select {
            padding: 8px 36px 8px 12px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #f5f5f5;
            font-size: 14px;
            color: #333;
            outline: none;
            transition: all 0.2s ease;
            appearance: none;
            cursor: pointer;
            background-image: url("data:image/svg+xml;utf8,<svg fill='%23333' height='18' viewBox='0 0 24 24' width='18' xmlns='http://www.w3.org/2000/svg'><path d='M7 10l5 5 5-5z'/></svg>");
            background-repeat: no-repeat;
            background-position: right 10px center;

            background-size: 14px;
        }

        .custom-select:hover {
            background-color: #eee;
        }
    </style>
