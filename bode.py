# Données en DUR (Hardcoded)
DATABASE_PASSWORD = "MotDePasse123"
API_URL = "https://api.monservice.com"
MAX_USERS = 10

# Données EXTERNES (Dynamiques)
password = os.getenv("DB_PASSWORD")
config = load_json("config.json")    