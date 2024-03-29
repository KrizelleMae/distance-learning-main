<div id="modal-sections" class="uk-modal-container text-gray-600" uk-modal>
  <div class="uk-modal-dialog">
    <button class="uk-modal-close-default" type="button" uk-close></button>
    <div class="uk-modal-header">
      <p class="uk-modal-title">John Doe</p>
      <small>Masters in Education</small>
    </div>
    <div class="uk-modal-body">
      <div class="container mx-auto">
        <!-- INFORMATION -->
        <div
          class="flex p-4 bg-blue-100 rounded dark:bg-blue-200"
          id="alertId"
          role="alert"
        >
          <svg
            class="flex-shrink-0 w-5 h-5 text-blue-700 dark:text-blue-800"
            fill="currentColor"
            viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              fill-rule="evenodd"
              d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
              clip-rule="evenodd"
            ></path>
          </svg>
          <div
            class="ml-3 text-sm font-medium text-blue-700 dark:text-blue-900"
          >
            Lorem ipsum dolor sit amet,
            <a
              href="#"
              class="font-semibold underline hover:text-blue-800 dark:hover:text-blue-900"
              >sample link</a
            >. Instructions or other details should be stated here.
          </div>
          <button
            type="button"
            class="ml-auto -mx-1.5 -my-1.5 bg-blue-100 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex h-8 w-8 dark:bg-blue-200 dark:hover:bg-blue-300 dark:hover:text-blue-800"
            data-collapse-toggle="alertId"
            aria-label="Close"
          >
            <span class="sr-only">Dismiss</span>
            <svg
              class="w-5 h-5"
              fill="currentColor"
              viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd"
              ></path>
            </svg>
          </button>
        </div>
        <!-- END INFO -->
        <div class="mt-3"></div>
        <?php include './components/tbl-subjects.php'; ?>

        <div class="mt-16 float-right">
          <button
            class="py-2 px-4 rounded border border-red-800 text-red-800 font-bold uk-modal-close hover:bg-red-200 mr-3"
            
          >
            Cancel
          </button>
          <button class="py-2 px-4 border border-blue-800 rounded bg-blue text-white">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</div>
