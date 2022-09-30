<script setup>
import GuestLayouts from '@/Layouts/GuestLayout.vue'
import LabelInputs from '@/Components/InputLabel.vue'
import TextInput from '@/Components/TextInput.vue'
</script>

<template>
  <GuestLayouts>
    <LabelInputs value="件名">
      いいい
    </LabelInputs>
    <TextInput modelValue="初期値"></TextInput>
  </GuestLayouts>
</template>
