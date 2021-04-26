<div class="menu"> 
    <ul class="nav nav-pills flex-column">
        <li>
            <a class="nav-link {{ setActive('home*')  }}" href="{{ route('home') }}">
                <i class="fas fa-home fa-1.2x mr-1" size="small"></i>
                @lang('Home')
            </a>
        </li>
        <li>
            <a class="nav-link {{ setActive('contact*')  }}" href="{{ route('contacts.index') }}">
                <i class="fas fa-id-card fa-1.2x mr-2"></i>
                @lang('Contact')
            </a>
        </li>
    </ul>
</div>