<div class="flex items-center">
  <x-ts-dropdown>
      <x-slot:action>
          <x-ts-button.circle>
              <x-ts-avatar x-on:click="show = !show" sm />
          </x-ts-button.circle>
      </x-slot:action>
      <x-ts-dropdown.items icon="user" text="Profile" />
      <x-ts-dropdown.items icon="envelope-simple" text="Inbox" separator />
      <x-ts-dropdown.items icon="sign-out" text="Logout" separator />
  </x-ts-dropdown>
</div>