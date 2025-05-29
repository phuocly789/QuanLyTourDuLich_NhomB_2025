<style>
    /* Custom styles for the modal */
    .custom-modal .modal-content {
        background: linear-gradient(135deg, #ffffff 0%, #e8f5d6 100%);
        /* Gradient dựa trên #86B817 */
        border: none;
        border-radius: 1rem;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        animation: modalFadeIn 0.3s ease-out;
    }

    .custom-modal .modal-header {
        border-bottom: none;
        padding-bottom: 0;
    }

    .custom-modal .modal-title {
        color: #86B817;
        /* Màu chủ đạo cho tiêu đề */
        font-weight: 700;
        font-size: 1.5rem;
    }

    .custom-modal .modal-body {
        padding: 2rem;
    }

    .custom-modal .modal-body p {
        color: #34495e;
        font-size: 1.1rem;
        margin-bottom: 1.5rem;
    }

    .custom-modal .btn-primary {
        background: #86B817;
        /* Màu chủ đạo cho nút chính */
        border: none;
        padding: 0.75rem 2rem;
        border-radius: 50px;
        font-weight: 600;
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .custom-modal .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(134, 184, 23, 0.4);
        background: #6a9312;
        /* Tối hơn khi hover */
    }

    .custom-modal .btn-outline-primary {
        border-color: #86B817;
        /* Màu chủ đạo cho viền */
        color: #86B817;
        /* Màu chủ đạo cho chữ */
        padding: 0.75rem 2rem;
        border-radius: 50px;
        font-weight: 600;
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .custom-modal .btn-outline-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(134, 184, 23, 0.4);
        background: #86B817;
        /* Màu chủ đạo khi hover */
        color: #fff;
    }

    .custom-modal .icon-wrapper {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        background: #e8f5d6;
        /* Nền nhạt dựa trên #86B817 */
        border-radius: 50%;
        margin-right: 0.5rem;
        color: #86B817;
        /* Màu chủ đạo cho biểu tượng */
    }

    @keyframes modalFadeIn {
        from {
            opacity: 0;
            transform: scale(0.95);
        }

        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    .text-primary-custom {
        color: #86B817 !important;
        /* Màu chủ đạo cho văn bản nhấn mạnh */
    }
</style>

<div class="modal fade custom-modal" id="loginPromptModal" tabindex="-1" aria-labelledby="loginPromptModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title" id="loginPromptModalLabel">Khám phá hành trình của bạn!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal Body -->
            <div class="modal-body text-center">
                <p>Vui lòng <strong class="text-primary-custom">đăng nhập</strong> hoặc <strong
                        class="text-primary-custom">đăng ký</strong> để bắt đầu đặt tour du lịch của bạn.</p>
                <div class="d-flex justify-content-center gap-3">
                    <a href="{{ route('login') }}" class="btn btn-primary">
                        <span class="icon-wrapper"><i class="fas fa-sign-in-alt"></i></span>
                        Đăng nhập
                    </a>
                    <a href="{{ route('register') }}" class="btn btn-outline-primary">
                        <span class="icon-wrapper"><i class="fas fa-user-plus"></i></span>
                        Đăng ký
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
