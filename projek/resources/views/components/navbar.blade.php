<div class="d-flex position-relative align-items-center justify-content-between p-4">
    <div class="logo d-flex align-items-center">
        <img src="/images/logo.png" alt="" style="width:3.4em;" class="rounded">
        <h5 class="blue-font fw-bold fs-6 hover:none"><a href="/" class="link-style"><u>Jago</u><span class="invest-text rounded ms-1">Investasi</span></a></h5>
    </div>
    <ul class="list position-static d-md-flex gap-4 align-items-center blue-font">
        <li class="list-child {{ ($title=='Course') ? 'active' : '' }}"><a href="/course" class="link-style">Course</a></li>
        <li class="list-child {{ ($title=='Profile') ? 'active' : '' }}"><a href="/profile" class="link-style">Profile</a></li>
        <li class="list-child"><a href="#Footer" class="link-style">About</a></li>
        <li class="list-child">
            <form action="/logout"  method="post">
                @csrf
                <button type="submit" class="col-md btn-login-2 rounded-1 fw-semibold" style="background-image: linear-gradient(to right, #f9c817, #facd1c, #fbd120, #fcd625, #fddb29);">LogOut      <i class="fa-solid fa-right-from-bracket"></i></button>
            </form>
        </li>
    </ul>
    <i class="fa-solid fa-ellipsis fa-xl d-md-none"></i>
</div>
