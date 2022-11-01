<div>
    <style>
        .loader {
            margin: 0 10px;
            display: flex;
            border: 3px solid #f3f3f3;
            /* Light grey */
            border-top: 3px solid #ff0000;
            /* Blue */
            border-radius: 50%;
            width: 20px;
            height: 20px;
            animation: spin 150ms linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
    <div class="loader" {{ $attributes }}></div>
</div>
