<!-- Modal -->
<div class="modal fade" id="delete{{ $order->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ __('backend.Delete') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <!-- Modal body -->

            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <p class="h5 text-danger">{{ __('backend.Are you sure about the deletion process?') }} </p>
                        <input type="text" class="form-control" readonly value="{{ $order->name }}">
                    </div>
                </div>
            </div>

            <form action="{{ route('dashboard.orders.destroy', $order->id) }}" method="post">
                @method('delete')
                @csrf
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('backend.Close') }}</button>
                    <button type="submit" class="btn btn-danger">{{ __('backend.Delete') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
