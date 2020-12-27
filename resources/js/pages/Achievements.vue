<template>
  <div>
      <h1 class="font-normal text-3xl text-gray-900 leading-none mb-12">
          Your achievements
      </h1>

      <input
        type="text"
        name="api_token"
        placeholder="Your Laracasts API Token"
        v-model="api_token"
        class="border p-2 rounded w-full"
        @keyup.enter="fetchingAchievements"
    >

    <p class="text-red italic text-sm" v-if="message" v-text="message"></p>

      <ul>
          <li
            v-for="(achievement, index) in achievements"
            :key="index"
            v-text="achievement.name"
          >

          </li>
      </ul>
  </div>
</template>

<script>
export default {
    data() {
        return {
            achievements: [],
            api_token:  null,
            message: null
        }
    },
    methods: {
        fetchingAchievements() {
            axios.get(
                'http://localhost:3000/api/achievements?api_token='+this.api_token
            )
            .catch(error => {
                console.log(error);
                this.message = error.statusText;
            })
            .then(({ data }) => this.achievements = data);
        },
    },

}
</script>

<style>

</style>
