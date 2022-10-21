<div>
    <style>
        .loader {
            margin: 0 5px;
            display: flex;
            border: 4px solid #f3f3f3;
            /* Light grey */
            border-top: 4px solid #ff0000;
            /* Blue */
            border-radius: 50%;
            width: 25px;
            height: 25px;
            animation: spin 2s linear infinite;
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
