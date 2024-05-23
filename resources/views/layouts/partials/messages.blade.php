<div class="alerts">
    @if(session()->has('login_success'))
        <div class="alert sucess">    
        <span class="alert-icon"><i class="fa fa-check"></i>      
        </span>
        <span class="alert-content">
            <span class="alert-close"><i class="fa fa-times"></i></span>
            <span class="alert-title">{{ session()->get('login_success') }}</span>
        </span>    
        </div>
    @endif
    @if(session()->has('register_success'))
        <div class="alert request">
        <span class="alert-icon"><i class="fa fa-exclamation"></i></span>
        <span class="alert-content">
            <span class="alert-close"><i class="fa fa-times"></i></span>
            <span class="alert-title">{{ session()->get('register_success') }}</span>
        </span>
        </div>
    @endif
</div>


{{-- <div class="alerts">
    <div class="alert sucess">    
        <span class="alert-icon"><i class="fa fa-check"></i>      
        </span>
        <span class="alert-content">
        <span class="alert-close"><i class="fa fa-times"></i></span>
        <span class="alert-title">Login Success</span>
        </span>    
    </div>
    <div class="alert request">
        <span class="alert-icon"><i class="fa fa-exclamation"></i></span>
        <span class="alert-content">
        <span class="alert-close"><i class="fa fa-times"></i></span>
        <span class="alert-title">Request submitted</span>
        <span class="alert-subtitle">
            View details
            <ul class="little-list">
            <li>New account has been created</li>
            <li>New provider has been created</li>
            <li>New provider has been created</li>
            <li>New provider has been created</li>
            </ul>
        </span>
        </span>
    </div>
    <div class="alert wait">
        <span class="alert-icon"><i class="fa fa-clock-o"></i></span>
        <span class="alert-content">
        <span class="alert-close"><i class="fa fa-times"></i></span>
        <span class="alert-title">Wait a Moment</span>
        <span class="alert-subtitle">
            View details
            <ul class="little-list">
            <li>New account has been created</li>
            <li>New provider has been created</li>
            </ul>
        </span>
        </span>
    </div>
    <div class="alert failed">
        <span class="alert-icon"><i class="fa fa-times"></i></span>
        <span class="alert-content">
        <span class="alert-close"><i class="fa fa-times"></i></span>
        <span class="alert-title">Failed</span>      
        <span class="alert-subtitle">
            View details
            <ul class="little-list">
            <li>New account has been created</li>
            <li>New provider has been created</li>
            </ul>
        </span>
        </span>
    </div>
</div> --}}