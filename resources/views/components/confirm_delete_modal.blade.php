<div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmDeleteModalLabel">Xác nhận xóa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Đóng"></button>
            </div>
            <div class="modal-body">
                Bạn có chắc chắn muốn xóa <span id="deleteItemName"></span> này không? Hành động này không thể hoàn tác.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                <form id="deleteForm" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Xóa</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const deleteButtons = document.querySelectorAll('.delete-btn');
        const modal = document.getElementById('confirmDeleteModal');
        const deleteForm = document.getElementById('deleteForm');
        const deleteItemName = document.getElementById('deleteItemName');

        deleteButtons.forEach(button => {
            button.addEventListener('click', function () {
                const deleteUrl = this.dataset.deleteUrl;
                const itemName = this.dataset.itemName || 'mục';
                deleteForm.action = deleteUrl;
                deleteItemName.textContent = itemName;
                const bsModal = new bootstrap.Modal(modal);
                bsModal.show();
            });
        });
    });
</script>
