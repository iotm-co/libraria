<!-- Custom fonts for this template-->
<link href="{{ asset('assets') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

<!-- Custom styles for this template-->
<link href="{{ asset('assets') }}/css/sb-admin-2.min.css" rel="stylesheet">
@stack('select2-style')
<style>
    ::-webkit-scrollbar {
        width: 7px;
        height: 7px;
    }

    ::-webkit-scrollbar-track {
        box-shadow: inset 0 0 3px rgba(0 0 0 / 0.15);
    }

    ::-webkit-scrollbar-thumb {
        background: linear-gradient(125deg, #696cff, #60a5fa);
        border-radius: 10px;
    }

    .line-clamp {
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }
</style>
