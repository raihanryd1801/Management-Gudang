import pandas as pd
import statsmodels.api as sm
import numpy as np

# Membuat data simulasi
np.random.seed(42)  # Untuk hasil yang konsisten

# Data simulasi
n = 30  # Jumlah observasi
inflasi = np.random.uniform(1, 5, n)  # Inflasi antara 1% hingga 5%
output_gap = np.random.uniform(-2, 2, n)  # Output gap antara -2% hingga 2%
bi7drr = 4 + 1.5 * inflasi - 0.8 * output_gap + np.random.normal(0, 0.5, n)  # Formula Taylor Rule dengan noise

# Membuat DataFrame
data = pd.DataFrame({
    'BI7DRR': bi7drr,
    'Inflasi': inflasi,
    'OutputGap': output_gap
})

# Menampilkan data
print("Contoh data:")
print(data.head())

# Menambahkan konstanta untuk regresi
X = sm.add_constant(data[['Inflasi', 'OutputGap']])
y = data['BI7DRR']

# Model regresi
model = sm.OLS(y, X).fit()

# Hasil regresi
print("\nHasil regresi:")
print(model.summary())

# Plot hasil (opsional)
import matplotlib.pyplot as plt

plt.scatter(inflasi, bi7drr, color='blue', label='Data BI7DRR vs Inflasi')
plt.plot(inflasi, model.params[0] + model.params[1] * inflasi + model.params[2] * output_gap.mean(), 
         color='red', label='Regresi Line')
plt.xlabel("Inflasi (%)")
plt.ylabel("BI7DRR (%)")
plt.legend()
plt.title("BI7DRR terhadap Inflasi dengan Model Taylor Rule")
plt.show()
