  <!-- Modal -->
  <div class="modal fade" id="basicModal{{$user->id}}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel1">Edit User</h5>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <form method="POST" action="{{route('dashboard.users.update',$user->id)}}">
          @csrf
          @method('put')
          <div class="modal-body">
              <div class="row">
                 @include('dashboard.user._form')
              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                Close
              </button>
              <button type="submit" class="btn btn-primary">Save Data</button>
            </div>
        </form>
      </div>
    </div>
  </div>