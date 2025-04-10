<!-- Modal -->
<div class="modal fade" id="edit{{ $admin->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ __('backend.Edit Password') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('admins.editPassword', $admin->id) }}" method="post">
                @method('put')
                @csrf

                <!-- Modal body -->

            <div class="modal-body">
                <div class="row">
                      <!--Password-->
                      <x-form.input lable="{{ __('backend.Password') }}" type="password" name="password" :value="$admin->password"
                        />
                </div>
                <div class="row">
                      <!--password_confirmation-->
                      <x-form.input lable="{{ __('backend.Confirm password') }}" type="password" name="password_confirmation" :value="$admin->password_confirmation"
                        />
                </div>
            </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('backend.Close')}}</button>
                    <button type="submit" class="btn btn-primary">{{ __('backend.Save Date') }}</button>
              </div>
            </form>
        </div>
    </div>
</div>
