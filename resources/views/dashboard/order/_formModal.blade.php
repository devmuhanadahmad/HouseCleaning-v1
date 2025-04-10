 <!-- Modal -->
 <div class="modal fade" id="order{{ $order->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Send Message To Email</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" action="{{ route('dashboard.orders.sendMailDate',$order->id) }}">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" value="{{ $order->id }}" name="id" />
                        <div class="row">
                           <div class="col mb-3">
                               <x-form.input lable="{{ __('Date') }}" name="date" type="date" :value="$order->date" required />
                           </div>
                       </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">Send Email</button>
                </div>
            </form>
        </div>
    </div>
</div>
