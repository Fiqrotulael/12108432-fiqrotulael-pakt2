                <!-- Basic delete -->
                <div class="delete fade" id="basicdelete" tabindex="-1">
                    <div class="delete-dialog">
                        <div class="delete-content">
                            <div class="delete-header">
                                <h5 class="delete-title">Update Stock</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="delete" aria-label="Close"></button>
                            </div>
                            <form class="row g-3" action="{{ route('produk.updateStock', $dt->id) }}" method="POST" enctype="multipart/form-data">
                                
                                <div class="delete-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="delete"><i class="bi bi-x"></i> Close</button>
                                    <button type="submit" class="btn btn-primary"><i class="bi bi-send"></i> Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End Basic delete-->