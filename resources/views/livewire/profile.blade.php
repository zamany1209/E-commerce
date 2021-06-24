<div class="col-lg-12">
    <div class="order_details_iner">
      <h3>Profile User</h3>
      <table class="table table-borderless">
        <thead>
          <tr>
          </tr>
        </thead>
        <tbody>
              <tr>
                  <th colspan="2"><span>Name</span></th>
                  <th> <span>{{ $user->name }}</span></th>
              </tr>
              <tr>
                <th colspan="2"><span>Family</span></th>
                <th> <span>{{ $user->family }}</span></th>
            </tr>
            <tr>
                <th colspan="2"><span>Phone</span></th>
                <th> <span>{{ $user->phone }}</span></th>
            </tr>
            <tr>
                <th colspan="2"><span>Email</span></th>
                <th> <span>{{ $user->email }}</span></th>
            </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="p-1">
    <a href="{{ route('auth.resete_password_user') }}" class="btn header-btn">Resete Password</a>
  </div>
  <div class="p-1">
    <a href="{{ route('auth.edite_data_user') }}" class="btn header-btn">Edite Profile</a>
  </div>
  <div class="p-1">
    <a href="{{ route('auth.logaut') }}" class="btn header-btn">Exit</a>
  </div>
