@extends ('layout/app')

@section ('style')
	<link rel="stylesheet" href="{{ URL::asset('style/style.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('style/style_button.css') }}">
@endsection

@section ('script')
	<script src="{{ URL::asset('scripts/script.js') }}" charset="utf-8"></script>
@endsection




@section ('content')



<div class="div-logo">
    <h1>Dog CEO</h1>
    <img src="https://www.luciblue.com/cdn/shop/products/20200514_094534_608x928.jpg?v=1589915362" alt="Dog" class="div-logo-img">
</div> 

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp


<!-- PHONE -->


<div class="app-wrapper">

    <div class="inner-border">

        <!--- DROPDOWN --->
        <button class="dropdown_bone">

            <div class="c1"></div>
            <div class="c2"></div>
            <div class="c3"></div>
            <div class="c4"></div>
            
            <div class="b1">
                <div class="b2">
                    <select id="breed-dropdown" class="styled-dropdown">
                        <option value="">Select Dog Breed &nbsp&nbsp 🐾</option>
                        <option value="">Random</option>
                    </select>
                </div>
            </div>

            <!--- IMG --->
            <div id="image-container"></div>

        </button>
    
    </div>

    <button class="bottom-button generate-dog">
        <img src="https://cdn-icons-png.flaticon.com/512/12/12638.png" alt="Home Button">
    </button>

</div>
@endsection