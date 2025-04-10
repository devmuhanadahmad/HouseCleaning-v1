<!-- Modal -->
<div class="modal fade" id="delete{{$contact->id}}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Delete Contact</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <p class="h5 text-danger">{{ __('dashboard.Are you sure about the deletion process?') }}
                            </p>
                            <input type="text" class="form-control" readonly value="{{ $contact->name }}">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <form action="{{ route('dashboard.contact.destroy', $contact->id) }}" method="post">
                        @method('delete')
                        @csrf
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary">Delete</button>
                    </form>
                </div>
        </div>
    </div>
</div>
